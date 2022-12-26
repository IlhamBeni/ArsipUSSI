<?php

namespace App\Http\Controllers;
use App\Models\doc;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $posts = Doc::count();
        $user = User::findOrFail(Auth::id());
        return view('dashboard.index', compact('user', 'posts'));
    }
    }
