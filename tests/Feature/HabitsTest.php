<?php

namespace Tests\Feature;

use App\Models\Habit;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HabitsTest extends TestCase
{
  use RefreshDatabase;
  /**
   * A basic feature test example.
   */
  public function test_habits_view_can_be_rendered(): void
  {
    $habits = Habit::factory(3)->create();

    $response = $this->withoutExceptionHandling()->get('/habits');

    $response->assertStatus(200);
    $response->assertViewHas('habits', $habits);
  }

  public function test_habits_can_be_created()
  {
    $habit = Habit::factory()->make();

    $response = $this->withoutExceptionHandling()->post('/habits', $habit->toArray());

    $response->assertRedirect('/habits');
    $this->assertDatabaseHas('habits', $habit->toArray());
  }
}
