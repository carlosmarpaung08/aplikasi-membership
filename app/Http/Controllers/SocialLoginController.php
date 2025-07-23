<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Hash;

class SocialLoginController extends Controller
{
    public function redirectToProvider($provider)
    {
        try {
            if ($provider === 'facebook') {
                return Socialite::driver($provider)
                    ->scopes(['email', 'public_profile'])
                    ->redirect();
            }
            return Socialite::driver($provider)->redirect();
        } catch (\Exception $e) {
            // Error handling
        }
    }

    public function handleProviderCallback($provider)
    {
        try {
            if ($provider === 'facebook') {
                $socialUser = Socialite::driver($provider)
                    ->fields([
                        'name',
                        'first_name',
                        'last_name',
                        'email',
                        'id'
                    ])->user();
            } else {
                $socialUser = Socialite::driver($provider)->user();
            }

            // Handle kasus email null
            $email = $socialUser->getEmail() ?? $socialUser->getId().'@'.$provider.'.temp';

            // Logika penyimpanan user
            $user = User::updateOrCreate(
                ['provider_id' => $socialUser->getId()],
                [
                    'name' => $socialUser->getName(),
                    'email' => $email,
                    'provider' => $provider,
                    'password' => Hash::make(Str::random(24)),
                    'email_verified_at' => now(),
                    'membership_type' => 'A',
                ]
            );

            Auth::login($user, true);
            return redirect()->intended('/dashboard');

        } catch (\Exception $e) {
            Log::error("Social login failed for provider {$provider}: " . $e->getMessage());
            return redirect('/login')->with('error', 'Login dibatalkan atau terjadi kesalahan: ' . $e->getMessage());
        }
    }
}