<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function loginUser(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required',
        ]);

        $user = null;
        if (is_numeric($request->username)) {
            $user = User::where('username', $request->username)
                ->where('role', 'student')
                ->with('student')
                ->first();

            if (!$user) {
                $user = User::where('username', $request->username)
                    ->where('role', 'teacher')
                    ->with('teacher')
                    ->first();
            }
        }

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        $userData = null;
        if ($user->role == 'student') {
            $userData = $user->student;
        } elseif ($user->role == 'teacher') {
            $userData = $user->teacher;
        }

        $userData = $user->role == 'student' ? $user->student : ($user->role == 'teacher' ? $user->teacher : null);
        if ($user->currentAccessToken()) {
            return response()->json([
                'message' => 'Already logged in',
                'token' => $user->currentAccessToken(),
                'user' => $user->role === 'student' ? $user->student : $user->teacher
            ], 200);
        }

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'token' => $token,
            'user' => $userData
        ]);
    }

    public function logoutUser(Request $request)
    {
        $request->user()->tokens()->delete();

        return response()->json([
            'message' => 'Successfully logged out'
        ], 200);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json(['token' => $token], 200);
    }

    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();

        return response()->json(['message' => 'Logged out'], 200);
    }
}
