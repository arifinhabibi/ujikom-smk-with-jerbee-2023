<?php

namespace App\Http\Controllers;

use App\Models\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(){
        return view('v_loginpage');
    }

    public function login(Request $request){
        $data = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($data)) {
            $request->session()->regenerate();
            # code...
            if (Auth::user()->role == 'kasir') {
                Log::create([
                    'id_user' => Auth::user()->id,
                    'activity' => 'login'
                ]);
                return redirect()->route('home');
            } else if(Auth::user()->role == 'owner'){
                Log::create([
                    'id_user' => Auth::user()->id,
                    'activity' => 'login'
                ]);
                return redirect()->route('owner-home');
            } else if (Auth::user()->role == 'admin'){
                Log::create([
                    'id_user' => Auth::user()->id,
                    'activity' => 'login'
                ]);
                return redirect()->route('admin-home');
            }
        }

        return back()->with('error','username atau password salah');
    }

    public function logout(Request $request){

        Log::create([
            'id_user' => Auth::user()->id,
            'activity' => 'logout'
        ]);
        
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('logout', 'Anda Sudah keluar');
    }
}
