<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Models\User;

class DashboardController extends Controller
{
    public function userDashboard()
    {
        $users = User::all();

        $posts = [];

        $response = Http::get('https://jsonplaceholder.typicode.com/posts');

        if ($response->successful()) {
            $posts = $response->json();
        }

        return view('dashboard.user', [
            'user' => Auth::user(),
            'users' => $users,
            'posts' => $posts
        ]);
    }

    public function adminDashboard()
    {
        return view('dashboard.admin', [
            'user' => Auth::user(),
            'users' => User::all()
        ]);
    }
}
