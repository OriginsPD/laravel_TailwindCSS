<?php

namespace App\Http\Livewire\Home\Features;

use Auth;
use App\Models\Vehicle;
use Livewire\Component;
use Livewire\WithPagination;

class ProductList extends Component
{
    use WithPagination;

    public $selectedVehicle = null;
    public bool $isSearch = false;
    public Vehicle $vehicle;
    public array $filter = [
        'perPage' => '',
        'daily-min-price' => null,
        'daily-max-price' => null,
        'weekly-min-price' => null,
        'weekly-max-price' => null,
    ];

    // protected $queryString = ['filter'];

    public function mount()
    {
        $this->vehicle = Vehicle::make();
    }

    public function startBooking(Vehicle $vehicleId)
    {

        Auth::check()
            ? $this->rentAblilty($vehicleId)
            : $this->dispatchBrowserEvent('show-failed');
    }

    public function rentAblilty(Vehicle $valueStatus)
    {
        return $valueStatus->status
            ? $this->redirect(route('rental-form', $valueStatus))
            : $this->dispatchBrowserEvent('show-failed');
    }

    public function getSortQueryProperty()
    {
        return Vehicle::query()
            ->when($this->filter['daily-min-price'], fn ($query, $daily_fee) => $query->where('daily_fee', '>=', $daily_fee))
            ->when($this->filter['daily-max-price'], fn ($query, $daily_fee) => $query->where('daily_fee', '<=', $daily_fee))
            ->when($this->filter['weekly-min-price'], fn ($query, $weekly_fee) => $query->where('weekly_fee', '>=', $weekly_fee))
            ->when($this->filter['weekly-max-price'], fn ($query, $weekly_fee) => $query->where('weekly_fee', '<=', $weekly_fee));
        //            ->where('status', true);

    }

    public function getSortProperty()
    {
        return $this->sortQuery->paginate($this->filter['perPage']);
    }

    public function resetFilters()
    {
        $this->reset('filter');
    }

    public function updatedFilter(): void
    {
        $this->resetPage();
    }

    public function render()
    {

        return view('livewire.Home.features.product-list', [
            'Products' => $this->sort
        ])
            ->layout('layouts.app');
    }
}
