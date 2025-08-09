<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Exception;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function registration()
    {
        return view('site.authentication.registration');
    }

    public function cadastration(Request $request)
    {
        try {
            $mensagem = new MensagemController;

            // Validação manual
            $validated = $request->validate([
                'email' => 'required|string|email|max:200|unique:users,email',
                'password' => 'required|string|min:6'
            ]);

            // Garante que a senha seja hash
            $validated['password'] = Hash::make($validated['password']);

            User::create($validated);

            return view('teste');
        } catch (Exception $e) {
            return $mensagem->mensagemErro($e->getMessage());
        }
    }

    public function login()
    {
        return view('site.authentication.login');
    }

    public function processLogin(Request $request)
    {
        // Validação dos campos
        $credentials = $request->validate([
            'email'    => ['required', 'email', 'exists:users,email'],
            'password' => ['required']
        ], [
            'email.exists' => 'Esse e-mail não está cadastrado no sistema.'
        ]);

        $user = User::where('email', $credentials['email'])->first();
        if ($user && Hash::check($credentials['password'], $user->password)) {
            Auth::login($user); // autentica o usuário
            $request->session()->regenerate(); // evita fixation

            return redirect()->route('teste')
                ->with('success', 'Login realizado com sucesso!');
        }

        // Caso falhe
        return back()->withErrors([
            'email' => 'As credenciais fornecidas estão incorretas.',
        ])->onlyInput('email');
    }
}
