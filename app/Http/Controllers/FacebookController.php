<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class FacebookController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function callback()
    {
        $use = Socialite::driver('facebook')->user();
        $User = User::where('fb_id', $use->user['id'])->first();
        if($User){
            Auth::login($User);
            return redirect()->route('actors');
        } else {
            User::create([
                'name' => $use->user['name'],
                'email' => $use->user['email'],
                'role' => 'user',
                'fb_id' => $use->user['id'],
                'password' => 'testing'
            ]);
        }
    }
}
