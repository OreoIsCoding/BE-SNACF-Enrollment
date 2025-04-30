<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AccountController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|unique:accounts|min:4',
            'email' => 'required|email|unique:accounts',
            'password' => 'required|min:6',
            'user_type' => 'required|in:admin,user'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $account = Account::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'user_type' => $request->user_type
        ]);

        return response()->json(['message' => 'Account created successfully', 'data' => $account], 201);
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $account = Account::where('username', $request->username)->first();

        if (!$account || !Hash::check($request->password, $account->password)) {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }

        if ($account->status !== 'active') {
            return response()->json(['message' => 'Account is inactive'], 403);
        }

        $token = $account->createToken('auth_token')->plainTextToken;
        return response()->json(['token' => $token, 'account' => $account]);
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'email|unique:accounts,email,' . auth()->id(),
            'username' => 'min:4|unique:accounts,username,' . auth()->id(),
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $account = auth()->user();
        $account->update($request->only(['email', 'username']));

        return response()->json(['message' => 'Account updated successfully', 'data' => $account]);
    }

    public function changePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'current_password' => 'required',
            'new_password' => 'required|min:6|different:current_password',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $account = auth()->user();

        if (!Hash::check($request->current_password, $account->password)) {
            return response()->json(['message' => 'Current password is incorrect'], 401);
        }

        $account->update(['password' => Hash::make($request->new_password)]);
        return response()->json(['message' => 'Password changed successfully']);
    }

    public function changeStatus(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'status' => 'required|in:active,inactive',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $account = auth()->user();
        $account->update(['status' => $request->status]);

        return response()->json(['message' => 'Status updated successfully', 'data' => $account]);
    }
}
