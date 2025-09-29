<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        // Ambil semua user yang role-nya bukan 'admin', urutkan dari yang terbaru
        $users = User::where('role', '!=', 'admin')->latest()->paginate(10);

        return view('admin.users.index', compact('users'));
    }
}
