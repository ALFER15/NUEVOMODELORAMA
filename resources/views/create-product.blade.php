<div>
    @if ($mCreate)
    <div class="bg-gray-800 bg-opacity-25 fixed inset-0 flex justify-center items-center z-50">
        <div class="bg-white shadow-lg rounded-lg p-6 max-w-md mx-auto">
            <form wire:submit='enviar'>
                <div class="mb-4 text-center font-bold text-lg"><span>Crear producto</span></div>
                <div class="mb-4">
                    <x-label for="name" value="Nombre del producto" />
                    <x-input type="text" wire:model='name' class="w-full mt-2" placeholder="Nombre de la Categoría" />
                </div>
                <div class="mb-4">
                    <x-label for="description" value="Descripción de la categoría" />
                    <x-input type="text" wire:model='description' class="w-full mt-2" placeholder="Descripción de la Categoría" /><br>
                </div>
                <x-button class="mt-2">Guardar</x-button>
                <x-border-button class="border-red-500 text-red-500 hover:bg-red-500 mt-2" wire:click='formCancel'>Cancelar</x-border-button>
            </form>
        </div>
    </div>
    @endif</div>