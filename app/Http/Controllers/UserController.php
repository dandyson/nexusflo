<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /**
     * Update the given verified user's profile information.
     *
     * @param  array<string, string>  $input
     */
    public function updateDetails(Request $request, User $user): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique('users')->ignore($user->id),
            ],
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $user->update($request->only(['name', 'email']));

        return response()->json(['type' => 'success', 'message' => 'Details Updated Successfully!']);
    }

    /**
     * Update the given verified user's profile information.
     *
     * @param  array<string, string>  $input
     */
    public function updateVerifiedUser(User $user, Request $request): JsonResponse
    {
        $user->update($request->only(['name', 'email']));

        return response()->json(['type' => 'success', 'message' => 'Details Updated Successfully!']);
    }

    /**
     * Validate and update the user's password.
     *
     * @param  array<string, string>  $input
     */
    public function updatePassword(Request $request, User $user): JsonResponse
    {
        $validatedData = $request->validate([
            'current_password' => [
                'required',
                'string',
                function ($attribute, $value, $fail) use ($user) {
                    if (! Hash::check($value, $user->password)) {
                        $fail(__('The provided password does not match your current password.'));
                    }
                },
            ],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        // If the validation passes, you can update the user's password
        $user->update(['password' => Hash::make($validatedData['password'])]);

        return response()->json(['type' => 'success', 'message' => 'Password Updated Successfully!']);
    }

    public function deleteAccount(User $user): JsonResponse
    {
        // Soft delete the user's account
        $user->delete();

        return response()->json([
            'type' => 'success',
            'message' => 'Account Deleted Successfully!',
        ]);
    }

    public function uploadAvatar(Request $request): JsonResponse
    {
        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $user = auth()->user();

        /** UPLOAD LIMIT - implemented for safety against going over the AWS free tier.
         * In this code: Check if the user has reached the upload limit.
         */
        if ($user->avatar_upload_count >= 10) {
            return response()->json(['error' => 'Error: Upload limit reached. Please contact the admin team to resolve.'], 403);
        }

        try {
            DB::transaction(function () use ($request, $user) {
                $image = $request->file('avatar');
                $avatarPath = "users/{$user->id}/avatar";
                $avatarName = $image->getClientOriginalName();

                // Perform the actual upload to S3
                $image->storeAs($avatarPath, $avatarName, 's3');

                // Update user with the new avatar URL and increment upload count
                $user->avatar = Storage::disk('s3')->url("{$avatarPath}/{$avatarName}");
                $user->avatar_upload_count += 1;
                $user->save();
            });
    
            return response()->json([
                'message' => 'Image uploaded successfully',
            ]);
    
        } catch (Exception $e) {
            return response()->json([
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
