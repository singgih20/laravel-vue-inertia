<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return Inertia::render('User/Index', [
            'users' => $users,
            'title' => 'title'
        ]);
    }

    public function show(User $user)
    {
        // $user = User::find($id);
        $title = "Profile";

        return Inertia::render('User/Detail', [
            'title' => $title,
            'user' => $user
        ]);
    }

    public function create()
    {
        $title = "Create new user";
        return Inertia::render('User/Register', [
            'title' => $title
        ]);
    }

    public function store(Request $request)
    {
        // $user = new User();
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->password = bcrypt($request->password);
        // $user->save();
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required',
            'password' => 'required'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->input('password'))
        ]);

        return Redirect::route('user.index')->with('message', 'User created!');
    }

    public function edit($id)
    {
        $user = User::find($id);
        $title = " Edit Profile ";

        return Inertia::render('User/Edit', [
            'title' => $title,
            'user' => $user
        ]);
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return Redirect::route('user.index')->with('message', 'User updated!');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return Redirect::route('user.index')->with('message', 'User deleted!');
    }

}
