<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habit extends Model
{
  use HasFactory;

  public $fillable = [
    'name',
    'times_per_day'
  ];
}
