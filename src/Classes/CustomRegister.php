<?php

namespace Jaber\CustomAuth\Classes;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CustomRegister
{
    public static $customValidationRules;
    public static $customRegisterView;

    public static function customValidationRules(array $rules)
    {
        static::$customValidationRules = $rules;
    }

    public static function validationRules(): array
    {
        return static::$customValidationRules
            ? static::$customValidationRules
            : [
                'name' => 'required',
                'email' => 'required',
                'password' => 'required'
            ];
    }

    public static function customRegisterView(callable $callback)
    {
        static::$customRegisterView = $callback;
    }

    public function showRegisterView()
    {
        return static::$customRegisterView
            ? call_user_func(static::$customRegisterView)
            : view('custom-auth::register');
    }

    public function createNewUser($request)
    {
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);
        Auth::login($user);
        return redirect()->route('home');
    }
}
