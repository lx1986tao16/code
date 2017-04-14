<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class FollowersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', [
            'store', 'destroy'
        ]);
    }

    public function store($id)
    {
        $user = User::findOrFail($id);
        if (Auth::user()->id === $user->id) {
            return redirect('/');
        }

        if (!Auth::user()->isFollowing($id)) {
            Auth::user()->follow($id);
        }

        return redirect()->route('users.show', $id);
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $auth_user = Auth::user();
        if ($auth_user->id === $user->id) {
            return redirect('/');
        }

        if ($auth_user->isFollowing($id)) {
            $auth_user->unfollow($id);
        }

        return redirect()->route('users.show', $id);

    }
}
