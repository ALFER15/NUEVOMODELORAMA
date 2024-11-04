<div>
    @if($pCreate)
        <div class="bg-gray-800 bg-opacity-25 fixed inset-0 flex items-center justify-center">
            <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white shadow rounded-lg p-6">
                    <form class="max-w-sm mx-auto" wire:submit.prevent='enviar'>
                        <div class="mb-4"><span>Crear Producto</span></div>
                        
                        <!-- Campos del formulario -->
                        <div class="mb-4">
                            <x-label for="name" value="Nombre del producto" class="w-full" />
                            <x-input name="name" wire:model='name' class="w-full" />
                        </div>
                        
                        <div class="mb-4">
                            <x-label for="stock" value="Inventario" class="w-full" />
                            <x-input type="number" name="stock" wire:model='stock' class="w-full" />
                        </div>
                        
                        <div class="mb-4">
                            <x-label for="store_price" value="Precio de compra" class="w-full" />
                            <x-input type="number" min="0" step="0.01" name="store_price" wire:model='store_price' class="w-full" />
                            
                            <x-label for="public_price" value="Precio de venta" class="w-full" />
                            <x-input type="number" min="0" step="0.01" name="public_price" wire:model='public_price' class="w-full" />
                        </div>
                        
                        <div class="mb-4">
                            <x-label for="expiration" value="Fecha de caducidad" class="w-full" />
                            <x-input type="date" name="expiration" wire:model='expiration' class="w-full" />
                        </div>
                        
                        <div class="mb-4">
                            <x-label for="assortment" value="Fecha de surtido" class="w-full" />
                            <x-input type="date" name="assortment" wire:model='assortment' class="w-full" />
                        </div>
                        
                        <div class="mb-4">
                            <x-label for="category" value="Categoría" class="w-full" />
                            <select wire:model='category_id' class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-600 w-full">
                                <option value="" disabled>Seleccione una opción</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="mb-4">
                            <x-label for="supplier" value="Proveedor" class="w-full" />
                            <select wire:model='supplier_id' class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-600 w-full">
                                <option value="" disabled>Seleccione una opción</option>
                                @foreach ($suppliers as $supplier)
                                    <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="mb-4">
                            <x-label for="status" value="Estatus" class="w-full" />
                            <select wire:model='status' class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-600 w-full">
                                <option value="" disabled>Seleccione una opción</option>
                                <option value="active">Activo</option>
                                <option value="disable">No disponible</option>
                            </select>
                        </div>
                        
                        <x-button class="mt-2">Guardar</x-button>
                        <x-border-button class="mt-2" wire:click="$set('pCreate', false)">Cancelar</x-border-button>
                    </form>
                </div>
            </div>
        </div>
    @endif
</div>
