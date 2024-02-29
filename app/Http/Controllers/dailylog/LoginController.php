<?php

namespace App\Http\Controllers\dailylog;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
	public function index()
	{
		return view('dailylog.login');
	}

	public function authenticate(Request $request)
	{
		$rules = [
			'username' => 'required|exists:users,username',
			'password' => 'required|min:6|max:30'
		];

		$credentials = $request->validate($rules, [
			'username.required' => 'Harap mengisi username.',
			'username.exists' => 'Username tidak ditemukan.',
			'username.max' => 'Password maksimal 30 karakter.',
			'password.required' => 'Harap mengisi password.',
			'password.min' => 'Password minimal 6 karakter.'
		]);

		if (Auth::attempt($credentials)) {
			$request->session()->regenerate();
			return redirect()->route('log.index');
		}

		return back()->with('login_error','Login gagal!');
	}

	public function logout(Request $request)
	{
		Auth::logout();
		$request->session()->invalidate();
		$request->session()->regenerateToken();
		return redirect()->route('home');
	}
}
