<?php

namespace App\Livewire\Hotels;

use App\Models\Hotel;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Livewire\Attributes\Title;

class HotelEdit extends Component
{
    #[Title('Edit Hotel')]

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

    public $hotel;

public function mount($id)
{
    $this->hotel = Hotel::findOrFail($id);
    $this->name = $this->hotel->name;
    $this->email = $this->hotel->email;
    $this->phone = $this->hotel->phone;
    $this->address = $this->hotel->address;
    $this->stars = $this->hotel->stars;
    $this->check_in_time = $this->hotel->check_in_time;
    $this->check_out_time = $this->hotel->check_out_time;
}
    public function render()
    {
        return view('livewire.hotels.hotel-edit');
    }

    public function update()
    {
        $validated = $this->validate();

        $this->hotel->update($validated);

        return $this->redirect('/hotels', navigate: true);
    }
}
