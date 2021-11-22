<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Login extends Component
{
    public User $user;
    public $password;

    protected $rules = [
        'user.email' => 'required|email',
        'password' => 'required|'
    ];

    public function authUser()
    {
        $this->validate();

        if (!auth()->attempt(['email' => $this->user->email, 'password' => $this->password])) {

            $this->addError('user.email', trans('auth.failed'));

        }

        return redirect(route('Admin.dashboard'));
    }

    public function updated(): void
    {
        $this->validate();
    }

    public function mount(): void
    {
        $this->user = new User;
    }

    public function render(): Factory|View|Application
    {
        return view('livewire.auth.login');
    }
}
