<?php

namespace App\Livewire\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{

    public $email;
    public $password;

    protected $rules = [
        'email' => 'required|email|max:255',
        'password' => 'required|max:255'
    ];

    public function submitLogin(Request $request) {
        $validated = $this->validate();

        if(Auth::attempt($validated)) {
            if(auth()->user()->role == 1) {
                $request->session()->regenerate();
                return redirect()->route('dashboard.index');
            }
        }

        return redirect()->back()->with('errorMsg','Invalid credentials');
    }

    public function render()
    {
        return view('livewire.auth.login')
            ->extends('layouts.auth.app')->section('contents');
    }
}
