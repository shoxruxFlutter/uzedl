<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function save(Request $request){
        if(Auth::check()){
            return redirect(route('user.private'));
        }
        $validateFields = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
   
        if(User::where('email', $validateFields['email'])->exists()){
           return redirect(route('user.registration'))->withErrors([
                'email' => 'Такои пользователь уже зарегистрирован'
            ]);
        }

        $user = User::create($validateFields);
        if($user){
            Auth::login($user);
            return redirect(route('user.private'));
        }

        return redirect(route('user.login'))->withErrors([
            'formError' => 'Произошла ошибка при сохранении пользователя'
        ]);
    }
}
