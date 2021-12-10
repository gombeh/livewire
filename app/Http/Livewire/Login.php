<?php

namespace App\Http\Livewire;

use Livewire\Component;
<<<<<<< HEAD
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $form = [
        'email'   => '',
        'password'=> '',
    ];

    public function submit()
    {
        $this->validate([
            'form.email'    => 'required|email',
            'form.password' => 'required',
        ]);

        Auth::attempt($this->form);
        return redirect(route('home'));
    }

=======

class Login extends Component
{
>>>>>>> 5e4a080
    public function render()
    {
        return view('livewire.login');
    }
}
