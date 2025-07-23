<?php

namespace App\Http\Controllers;

use App\Models\User; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
    public function __construct()
    {
        // Middleware 'auth' memastikan hanya user yang login yang bisa mengakses
        // Middleware 'can:manage-users' akan kita buat nanti untuk memastikan hanya admin
        $this->middleware(['auth', 'can:manage-users']);
    }

    /**
     * Menampilkan daftar semua user.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $users = User::all(); 
        return view('admin.users.index', compact('users'));
    }

    /**
     * Menangani perubahan tipe membership user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateMembership(Request $request, User $user)
    {
        // Validasi input
        $request->validate([
            'membership_type' => ['required', 'string', Rule::in(['A', 'B', 'C'])],
        ]);

        // Pastikan admin tidak bisa mengubah tipe membership dirinya sendiri jika tidak diinginkan
        if (Auth()->user()->id === $user->id) {
            return back()->with('error', 'Anda tidak dapat mengubah tipe membership akun admin Anda sendiri melalui halaman ini.');
        }

        // Update tipe membership user
        $user->membership_type = $request->membership_type;
        $user->save();

        return back()->with('success', 'Tipe membership berhasil diperbarui!');
    }
}