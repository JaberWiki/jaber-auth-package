<?php

namespace Jaber\CustomAuth\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Jaber\CustomAuth\Classes\CustomRegister;

class RegisterRequest extends FormRequest
{
    public function rules(): array
    {
        return CustomRegister::validationRules();
    }
}
