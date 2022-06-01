<?php

namespace App\Http\Livewire\Auth;

use App\Http\Livewire\UserAuth\WithUserAuth;
use App\Models\User;
use Livewire\Component;

class Register extends Component
{
    use WithUserAuth;

    public $password_confirmation;

    public function rules()
    {
        return [
            'user.firstname' => 'required',
            'user.lastname' => 'required',
            'user.email' => 'email|required',
            'password' => 'required|confirmed',
        ];
    }

    public function mount(): void
    {
        $this->user = User::make(['email' => 'example@mail.com']);
    }

    public function userRegister(): void
    {
        $this->authRegister();
        $this->emit('Modal-Close');
    }

    public function updated(): void { $this->validate(); }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
