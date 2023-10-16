<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class EmailVerificationController extends Controller
{
    public function checkEmail(Request $request)
    {
        $email = $request->input('email');

        // Recherchez l'e-mail dans la base de données (ici, nous supposons que vous avez une table "users")
        $user = User::where('email', $email)->first();

        if ($user) {
            return response()->json(['exists' => true]);
        } else {
            return response()->json(['exists' => false]);
        }
    }
}
