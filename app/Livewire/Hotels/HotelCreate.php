<?php

namespace App\Livewire\Hotels;

use App\Models\Hotel;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Livewire\Attributes\Title;

class HotelCreate extends Component
{
    #[Title('Create Hotel')]

    #[Validate('required', message: 'Field nama harus diisi')]
    #[Validate('min:3', message: 'Minimal 3 karakter')]
    public $name;
    
    #[Validate('required', message: 'Field phone harus diisi')]
    public $phone;

    #[Validate('required|email', message: 'Email tidak valid')]
    public $email;

    #[Validate('required|numeric', message: 'Bintang harus berupa angka')]
    public $stars;
    
    #[Validate('required')]
    public $address;

    #[Validate('required')]
    public $check_in_time;

    #[Validate('required')]
    public $check_out_time;

    public function render()
    {
        return view('livewire.hotels.hotel-create');
    }

    public function create()
    {
        $validated = $this->validate();

        Hotel::create($validated);

        return $this->redirect('/hotels', navigate: true);
    }
}
