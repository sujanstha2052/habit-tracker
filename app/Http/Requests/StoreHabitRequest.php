<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHabitRequest extends FormRequest
{
  public function rules(): array
  {
    return [
      'name' => 'required',
      'times_per_day' => 'required'
    ];
  }
}
