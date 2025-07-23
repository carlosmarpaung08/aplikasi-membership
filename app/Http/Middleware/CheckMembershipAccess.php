<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckMembershipAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$allowedMembershipTypes): Response
    {
        // Pastikan user sudah login
        if (!Auth::check()) {
            return redirect('/login')->with('error', 'Anda harus login untuk mengakses halaman ini.');
        }

        $user = Auth::user();
        $userMembershipType = $user->membership_type;

        // Jika tidak ada tipe membership yang diizinkan yang ditentukan, izinkan akses (misal untuk halaman umum)
        if (empty($allowedMembershipTypes)) {
            return $next($request);
        }

        // Periksa apakah tipe membership user ada dalam daftar yang diizinkan
        if (in_array($userMembershipType, $allowedMembershipTypes)) {
            return $next($request);
        }

        // Jika user tidak memiliki tipe membership yang diizinkan
        return redirect()->back()->with('access_denied', 'Tipe membership Anda tidak mengizinkan akses ke konten ini. Silakan upgrade membership Anda!');
    }
}