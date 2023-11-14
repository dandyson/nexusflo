<?php

namespace Tests\Feature;

use App\Models\Notebook;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class NotebookControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function user_can_get_notebooks()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->getJson(route('notebooks.index'));

        $response->assertStatus(200)
            ->assertJsonStructure([
                '*' => ['id', 'title', 'created_at', 'updated_at', 'notes'],
            ]);
    }

    /** @test */
    public function user_can_create_notebook()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->postJson(route('notebooks.store'));

        $response->assertStatus(201)
            ->assertJsonStructure(['id', 'title', 'created_at', 'updated_at']);

        $this->assertDatabaseHas('notebooks', [
            'user_id' => $user->id,
            'title' => 'New Notebook',
        ]);
    }

    /** @test */
    public function user_can_update_notebook()
    {
        $user = User::factory()->create();

        $notebook = Notebook::factory()->create(['user_id' => $user->id]);

        $response = $this->actingAs($user)->putJson(route('notebooks.update', $notebook), [
            'title' => 'Updated Notebook',
        ]);

        $response->assertStatus(200)
            ->assertJson(['title' => 'Updated Notebook']);

        $this->assertDatabaseHas('notebooks', [
            'id' => $notebook->id,
            'title' => 'Updated Notebook',
        ]);
    }

    /** @test */
    public function user_can_delete_notebook()
    {
        $user = User::factory()->create();

        $notebook = Notebook::factory()->create(['user_id' => $user->id]);

        $response = $this->actingAs($user)->deleteJson(route('notebooks.destroy', $notebook));

        $response->assertStatus(200)
            ->assertJson(['message' => 'Notebook deleted']);

        $this->assertDatabaseMissing('notebooks', ['id' => $notebook->id]);
    }
}
