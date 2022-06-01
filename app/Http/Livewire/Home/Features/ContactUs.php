<?php

namespace App\Http\Livewire\Home\Features;

use Livewire\Component;

class ContactUs extends Component
{
    public function render()
    {
        return view('livewire.home.features.contact-us')
        ->layout('layouts.app');
    }
}
