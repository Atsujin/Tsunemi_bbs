<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/')->with('alertMessage', 'ログインしました');
        };

        return back()->withErrors([
            'email' => 'メールアドレスまたはパスワードが正しくありません。',
        ])->onlyInput('email');

    }

    public function logout(Request $request)
{
    // ログアウト処理
    Auth::logout();
    // 現在使っているセッションを無効化(セキュリティ対策のため)
    $request->session()->invalidate();
    // セッションを無効化を再生成(セキュリティ対策のため)
    $request->session()->regenerateToken();

    session()->flash('message', 'ログアウトしました');
    return redirect('/');
}
}
