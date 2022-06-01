<?php

namespace App\Http\Livewire\Navigation\Home;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Main extends Component
{

    public bool $notify = false;

    public array $control = [
        'login' => false,
        'register' => false,
        'profile' => false
    ];

    protected $listeners = ['Modal-Close' => 'modalRest'];

    public function modalRest(): void
    {
        $this->reset('control');

    }

    public function logout()
    {
        Auth::logout();

        session()->invalidate();

        session()->regenerateToken();

        return redirect('/');

    }

    public function render()
    {
        return view('livewire.navigation.home.main');
    }
}
