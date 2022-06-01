<?php

namespace App\Http\Livewire\Auth;

use App\Http\Livewire\UserAuth\WithUserAuth;
use App\Models\User;
use Livewire\Component;

class Login extends Component
{
    use WithUserAuth;

    public function rules()
    {
        return [
            'user.email' => 'required|email',
            'password' => 'required|min:4'
        ];
    }

    public function authUser(): void
    {
        $this->validate();

        $this->authLogin();
        $this->addError('email', trans('auth.failed'));

        $this->emit('Modal-Close');

        $this->dispatchBrowserEvent('show-alert');
    }

    public function updatedPassword(): void
    {
        $this->validate();
    }

    public function mount(): void
    {
        $this->user = new User;
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
