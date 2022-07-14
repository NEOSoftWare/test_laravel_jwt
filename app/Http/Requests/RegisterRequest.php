<?php

namespace App\Http\Requests;

use App\User;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'login' => [
                'required',
                'min:3',
                function ($attribute, $value, $fail) {
                    if (User::where('login', $value)->exists()) {
                        $fail('This login is already taken');
                    }
                }
            ],
            'password' => 'required|confirmed|min:2',
        ];
    }

    public function getFirstVisit(): Carbon
    {
        $firstVisit = $this->cookie('first_visit');

        if (!empty($firstVisit)) {
            return Carbon::createFromTimestamp($firstVisit);
        }

        return Carbon::now();
    }
}
