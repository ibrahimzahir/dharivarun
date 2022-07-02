<?php

namespace App\Http\Livewire;


use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{   
    public $form = [
        'name' => '',
        'password' => '',
    ];

    public function submit() {
        $this->validate([
            'form.name'     => 'required',
            'form.password' => 'required',
    
        ]);

        Auth::attempt($this->form);
        return redirect()->to('/dashboard'); 

    }

    public function render()
    {
        return view('livewire.login');
    }
}
