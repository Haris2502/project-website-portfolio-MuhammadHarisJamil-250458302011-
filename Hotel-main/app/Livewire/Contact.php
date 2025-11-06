<?php

namespace App\Livewire;

use Livewire\Attribubtes\Title;
use Livewire\Component;

class Contact extends Component
{
    #[Title('Contact Us')]
    public function render()
    {
        return view('livewire.contact');
    }
}
