<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Validator;
use Illuminate\Support\Facades\Auth;

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

    if ($request['email'] !== $user->email && $user instanceof MustVerifyEmail) {
      $this->updateVerifiedUser($user, $request);
    } else {
      $user->forceFill([
        'name' => $request['name'],
        'email' => $request['email'],
      ])->save();
    }

    return response()->json(['type' => 'success', 'message' => 'Details Updated Successfully!']);
  }

  /**
   * Update the given verified user's profile information.
   *
   * @param  array<string, string>  $input
   */
  public function updateVerifiedUser(User $user, Request $request): JsonResponse
  {
    $user->forceFill([
      'name' => $request['name'],
      'email' => $request['email'],
    ])->save();

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
          if (!Hash::check($value, $user->password)) {
            $fail(__('The provided password does not match your current password.'));
          }
        }
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

    return response()->json(['type' => 'success', 'message' => 'Account Deleted Successfully!']);
  }

  public function uploadAvatar(Request $request): JsonResponse
  {
    $request->validate([
      'avatar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    if ($request->hasFile('avatar')) {
      $user = Auth::user();
      $image = $request->file('avatar');
      $avatarPath = "users/$user->id/avatar";
      $avatarName = $image->getClientOriginalName();

      // Store in S3 Bucket
      $request->file('avatar')->storeAs(
        $avatarPath,
        $avatarName,
        's3'
      );

      $user->avatar = Storage::disk('s3')->url("$avatarPath/$avatarName");
      $user->save();

      return response()->json([
        'message' => "Image uploaded successfully",
      ]);
    } else {
      return response()->json(['error' => 'Invalid file'], 400);
    }
  }
}
