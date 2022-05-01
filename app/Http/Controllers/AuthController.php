<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ {
    LoginValidateRequest,
    RegisterValidateRequest
};
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    protected $model;

    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function login()
    {
        return view('auth.login');
    }

    public function loginHandle(LoginValidateRequest $request)
    {
        $data = $request->only('email', 'password');
        if (Auth::attempt($data)) {
            $request->session()->regenerate();

            return redirect()->intended(RouteServiceProvider::HOME);
        }
        return redirect()->route('login')->withErrors("Usuário ou senha inválidos");
    }

    public function register()
    {
        return view('auth.register');
    }

    public function registerHandle(RegisterValidateRequest $request)
    {
        if (!$this->model->createUser($request->all())) {
            return redirect()->back()
                ->withErrors("Ocorreu um erro desconhecido, tente novamente mais tarde");
        }

        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();
            return redirect()->intended(RouteServiceProvider::HOME);
        }

        return redirect()->back()
            ->withErrors("Usuário ou senha inválidos");
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
