<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.user');
    }

    public function store(Request $request)
    {

        // dd($request->only('name', 'username', 'password'));
        $validated = $request->validate([
            'name' => 'required|min:3|max:255',
            'username' => 'required|string|regex:/\w*$/|max:255|unique:users,username',
            'password' => '',
            'reapeat_password' => ''
        ]);

        User::create($validated);

        // return redirect()->route('admin.user')->with('success', 'Post created successfully.');
    }
    public function show($id)
    {
        $user = User::findOrFail($id);

        // abort_if(!$user, 404);

        return view('admin/user', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {

        // Validate the request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|min:4|max:255,',
            'password' => 'nullable|string|min:6', // Only if updating password
            'repeat_password' => 'nullable|same:password|min:6'
        ]);

        // Find the user by ID and update
        $user = User::findOrFail($id);
        $user->update([
            'name' => $validated['name'],
            'username' => $validated['username'],
            // Hash password if provided
            'password' => $validated['password'] ? bcrypt($validated['password']) : $user->password,
        ]);
        // dd($validated['name']);
        return view('admin/dashboard');
    }
}
