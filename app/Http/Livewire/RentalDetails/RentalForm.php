<?php

namespace App\Http\Livewire\RentalDetails;

use App\Models\Addon;
use App\Models\Book;
use App\Models\Vehicle;
use Livewire\Component;
use Livewire\WithPagination;

class RentalForm extends Component
{
    use WithPagination;

    public Book $book;
    public Vehicle $product;

    public $addonList = [];
    public array $addonDetails = [
        'name' => null,
        'description' => null
    ];

    public array $parishes = [
        'St.Ann' => 'St.Ann',
        'Hanover' => 'Hanover',
        'St.Mary' => 'St.Mary',
        'St.James' => 'St.James',
        'Trelawny' => 'Trelawny',
        'Portland' => 'Portland',
        'Kingston' => 'Kingston',
        'St.Thomas' => 'St.Thomas',
        'Clarendon' => 'Clarendon',
        'St.Andrew' => 'St. Andrew',
        'Manchester' => 'Manchester',
        'St.Elizabeth' => 'St.Elizabeth',
        'Westmoreland' => 'Westmoreland',
        'St.Catherine' => 'St. Catherine',
    ];

    public function rules()
    {
        return [
            'book.pickup_location' => 'required|in:' . collect($this->parishes)->keys()->implode(','),
            'book.dropoff_location' => 'required|in:' . collect($this->parishes)->keys()->implode(','),
            // 'book.dropoff_location' => 'required',
        ];
    }



    public function mount($id)
    {
        // dd($id);
        $this->product = Vehicle::query()->find($id);
        $this->book = Book::make();
    }

    public function makeNewBooking()
    {
    }

    public function updated()
    {
        $this->validate();
    }

    public function addonInfo(Addon $selectAddon)
    {
        $this->addonDetails = [
            'name' => $selectAddon->name,
            'description' => $selectAddon->description
        ];

        $this->dispatchBrowserEvent('show-addon');
    }

    public function render()
    {
        return view('livewire.rental-details.rental-form', [
            'Addons' => Addon::paginate(6),
        ])
            ->layout('Layouts.app');
    }
}
