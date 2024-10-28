<div>
@if ($modal == 'categories')

    <x-button wire:click="$set('modal', 'supplier')">Supplier</x-button>
    <x-button wire:click="$set('modal', 'branch')">Branch</x-button>
    @livewire('catalogo.create-category')

@elseif($modal == 'branch')

    <x-button wire:click="$set('modal', 'categories')">Category</x-button>
    <x-button wire:click="$set('modal', 'supplier')">Supplier</x-button>
    @livewire('catalogo.create-branch')


@elseif($modal == 'supplier')
    <x-button wire:click="$set('modal', 'categories')">Category</x-button>
    <x-button wire:click="$set('modal', 'branch')">branch</x-button>
    @livewire('catalogo.create-supplier')

    
@endif
</div>
