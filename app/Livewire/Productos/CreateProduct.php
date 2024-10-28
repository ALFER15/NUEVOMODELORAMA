<?php

namespace App\Livewire\Productos;

use App\Models\Supplier;
use App\Models\Category;
use Livewire\Component;

class CreateProduct extends Component
{

    public $pCreate = true;
    public $categories, $suppliers;

    public function mount(){
        $this->categories = Category::all();
        $this->suppliers = Supplier::all();
    }

    public function render()
    {
        return view('livewire.productos.create-product');
    }

    public function enviar(){
        dd($this->category_id);
        $this->pCreate = false;
    }
}
