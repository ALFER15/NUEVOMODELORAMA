<?php

namespace App\Http\Livewire\Productos;

use App\Models\Supplier;
use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class CreateProduct extends Component
{
    // Define todas las propiedades necesarias
    public $pCreate = true;
    
    public $category_id = "";
    public $supplier_id = "";
    public $name, $stock, $store_price, $public_price, $expiration, $assortment, $status = "";
    public $categories, $suppliers;

    // Método de inicialización
    public function mount()
    {
        // Cargar categorías y proveedores
        $this->categories = Category::all();
        $this->suppliers = Supplier::all();
    }

    // Método para renderizar la vista
    public function render()
    {
        // Asegura que se pase la variable $pCreate a la vista
        return view('livewire.productos.create-product', [
            'pCreate' => $this->pCreate
        ]);
    }

    // Método para enviar el formulario y crear el producto
    public function enviar()
    {
        $product = new Product();
        $product->name = $this->name;
        $product->stock = $this->stock;
        $product->store_price = $this->store_price;
        $product->public_price = $this->public_price;
        $product->expiration = $this->expiration;
        $product->assortment = $this->assortment;
        $product->status = $this->status;
        $product->category_id = $this->category_id;
        $product->supplier_id = $this->supplier_id;

        // Guardar producto en la base de datos
        $product->save();

        // Reiniciar los campos del formulario
        $this->reset([
            'name', 'stock', 'store_price', 'public_price', 
            'expiration', 'assortment', 'status', 'category_id', 'supplier_id'
        ]);

        // Desactivar el formulario de creación
        $this->pCreate = false;
    }
}
