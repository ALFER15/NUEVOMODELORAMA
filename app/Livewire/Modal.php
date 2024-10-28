<?php

namespace App\Livewire;

use Livewire\Component;

class Modal extends Component
{

    public $modal = 'categories'; 
    public function render()
    {
        return view('livewire.modal');
    }
}
