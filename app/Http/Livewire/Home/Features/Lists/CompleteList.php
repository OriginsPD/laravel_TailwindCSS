<?php

namespace App\Http\Livewire\Home\Features\Lists;

use App\Models\Vehicle;
use Livewire\Component;

class CompleteList extends Component
{

    public function render()
    {
        return view('livewire.home.features.lists.complete-list',[
            'Products' =>  Vehicle::query()->get(),
        ])
        ->layout('layouts.app');
    }
}
