<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHabitRequest;
use App\Http\Requests\UpdateHabitRequest;
use App\Models\Habit;
use Illuminate\Http\Request;

class HabitsController extends Controller
{
  public function index()
  {
    $habits = Habit::all();
    return view('habits.index', ['habits' => $habits]);
  }

  public function store(StoreHabitRequest $request)
  {
    Habit::create([
      'name' => $request->input('name'),
      'times_per_day' => $request->input('times_per_day'),
    ]);

    return to_route('habits.index');
  }

  public function update(UpdateHabitRequest $request, Habit $habit)
  {

    $habit->update([
      'name' => $request->input('name'),
      'times_per_day' => $request->input('times_per_day'),
    ]);

    return to_route('habits.index');
  }

  public function destroy(Request $request, Habit $habit)
  {
    $habit->delete();

    return to_route('habits.index');
  }
}
