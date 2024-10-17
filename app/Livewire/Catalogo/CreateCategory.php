<?php

namespace App\Livewire\Catalogo;

use App\Models\Category;
use Livewire\Component;

class CreateCategory extends Component
{
        public $categories;
        public $name;
        public $description;

    /*public function mount (){
        $this->categories = Category::all();
    }*/
    public function render()
    {
        $this->categories = Category::all();
        return view('livewire.catalogo.create-category');
    }
    public function enviar()
    {
       $category = new Category();
       $category->name = $this->name;
       $category->description = $this->description;
       $category->save();
       $this->reset(['name','description']);
   }
   public function eliminar (Category $category){
    $category->delete();
    }
}