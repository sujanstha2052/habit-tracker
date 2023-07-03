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
}
