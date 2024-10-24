<?php

namespace App\Livewire\Catalogo;

use App\Models\Branch;
use Livewire\Component;

class CreateBranch extends Component
{
    public $name, $phone, $address, $rfc;
    public $branches;
    public $idEditable;

    public $mEdit = false;
    public $branchEdit = [
        'id' => '',
        'name' => '',
        'phone' => '',
        'address' => '',
        'email' => '',
        'manager_name' => '',
        'rfc' => ''];
  
    public function render()
    {
        $this->branches = Branch::all();
        return view('livewire.catalogo.create-branch');
    }

    public function enviar(){
        $branch = new Branch();
        $branch->name = $this->name;
        $branch->phone = $this->phone;
        $branch->address = $this->address;
        $branch->rfc = $this->rfc;
        $branch->save();
        $this->reset(['name','phone','address','rfc']);
    }

    public function editar($branchID){
        $this->mEdit = true;
        $branchEditable = Branch::find($branchID);
        $this->idEditable = $branchEditable->id;
        $this->branchEdit['name'] = $branchEditable->name;
        $this->branchEdit['phone'] = $branchEditable->phone;
        $this->branchEdit['address'] = $branchEditable->address;
        $this->branchEdit['rfc'] = $branchEditable->rfc;
        $this->branchEdit['email'] = $branchEditable->email;
        $this->branchEdit['manager_name'] = $branchEditable->manager_name;
    }

public function update() {
    $supplier = Branch::find($this->idEditable);
    $supplier->update([
        'name' => $this->branchEdit['name'],
        'phone' => $this->branchEdit['phone'],
        'address' => $this->branchEdit['address'],
        'rfc' => $this->branchEdit['rfc'],
        'email' => $this->branchEdit['email'],
        'manager_name' => $this->branchEdit['manager_name'],
    ]);
    $this->reset([
        'branchEdit',
        'idEditable',
        'mEdit'
    ]);
}

    public function eliminar (Branch $branch){
        $branch->delete();
        }

}
