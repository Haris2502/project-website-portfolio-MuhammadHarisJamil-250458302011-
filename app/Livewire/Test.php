<?php

namespace App\Livewire;
use Livewire\Attributes\Title;
use Livewire\Component;

class Test extends Component
{
    #[Title('Test')]

    public $angka =  0;

    public function render()
    {
        return view('livewire.test');
    }

    public function tambah(){
        $this->angka = $this->angka +1;
    }
}
