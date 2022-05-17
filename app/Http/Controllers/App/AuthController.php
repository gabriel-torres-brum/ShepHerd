<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Http\Requests\LoginValidateRequest;
use App\Http\Requests\RegisterValidateRequest;

use App\Providers\RouteServiceProvider;

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
      return view('app.login');
   }

   public function handleLogin(LoginValidateRequest $request)
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
      return view('app.register');
   }

   public function handleRegister(RegisterValidateRequest $request)
   {
      if (!$this->model->createUser($request->all())) {
         return redirect()->back()->withErrors("Ocorreu um erro desconhecido, tente novamente mais tarde");
      }

      if (Auth::attempt($request->only('email', 'password'))) {
         $request->session()->regenerate();
         return redirect()->intended(RouteServiceProvider::HOME);
      }

      return redirect()->back()->withErrors("Usuário ou senha inválidos");
   }

   public function logout(Request $request)
   {
      Auth::logout();

      $request->session()->invalidate();
      $request->session()->regenerateToken();

      return redirect()->route("login");
   }
}
