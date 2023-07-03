<?php

namespace App\Http\Controllers;

use App\Models\Habit;
use Illuminate\Http\Request;

class HabitsController extends Controller
{
  public function index()
  {
    $habits = Habit::all();
    return view('habits.index', ['habits' => $habits]);
  }

  public function store(Request $request)
  {
    Habit::create([
      'name' => $request->input('name'),
      'times_per_day' => $request->input('times_per_day'),
    ]);

    return to_route('habits.index');
  }
}
