<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function registration()
    {
        return view('site.registration');
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
}
