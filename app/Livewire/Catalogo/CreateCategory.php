<?php

namespace App\Livewire\Catalogo;

use App\Models\Category;
use Livewire\Component;

class CreateCategory extends Component
{
        public $cat;
        public $name;
        public $title;
        public $description;

    public function mount (){}
    public function render()
    {
        return view('livewire.catalogo.create-category');
    }
    public function enviar()
    {
       $category = new Category();
       $category->name = $this->name;
       $category->description = $this->description;
       $category->save();
   }
}
