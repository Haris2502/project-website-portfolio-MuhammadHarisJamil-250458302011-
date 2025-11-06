<?php

namespace App\Livewire\Hotels;

use App\Models\Hotel;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

class HotelList extends Component
{
    use WithPagination;

    #[Title('Hotels')]
    public $search = '';


    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $hotels = Hotel::query()
            ->when($this->search, function ($query) {
                $query->where('name', 'LIKE', '%' . $this->search . '%')
                      ->orWhere('address', 'LIKE', '%' . $this->search . '%')
                      ->orWhere('email', 'LIKE', '%' . $this->search . '%');
            })
            ->paginate(5); // jumlah per halaman

        return view('livewire.hotels.hotel-list', [
            'hotels' => $hotels
        ]);
    }

    public function delete($id)
    {
        $hotel = Hotel::findOrFail($id);
        $hotel->delete();

        session()->flash('message', 'Hotel deleted successfully.');

        return $this->redirect('/hotels', navigate: true);
    }
}
