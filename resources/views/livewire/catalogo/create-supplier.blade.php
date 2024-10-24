<div class="container mx-auto p-6 bg-white dark:bg-gray-900 rounded-lg shadow-lg">
    <h1 class="text-2xl font-semibold text-gray-800 dark:text-white text-center mb-6">Agregar Nuevo Proveedor</h1>
    <div class="max-w-md mx-auto">
        <form class="space-y-4" wire:submit.prevent='enviar'>
            <div>
                <x-label for="name" value="Nombre" class="text-gray-700 dark:text-gray-300"/>
                <x-input name="name" wire:model='name' class="w-full"/>
            </div>
            
            <div>
                <x-label for="phone" value="Teléfono" class="text-gray-700 dark:text-gray-300"/>
                <x-input name="phone" class="w-full" wire:model='phone'/>
            </div>

            <div>
                <x-label for="email" value="Email" class="text-gray-700 dark:text-gray-300"/>
                <x-input name="email" class="w-full" wire:model='email'/>
            </div>

            <div>
                <x-label for="manager_name" value="Nombre del Representante" class="text-gray-700 dark:text-gray-300"/>
                <x-input name="manager_name" class="w-full" wire:model='manager_name'/>
            </div>

            <div>
                <x-label for="address" value="Dirección" class="text-gray-700 dark:text-gray-300"/>
                <textarea id="address" name="address" rows="4" class="block w-full p-2.5 text-gray-900 bg-gray-50 dark:bg-gray-700 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:text-white dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" wire:model='address' placeholder="Dirección"></textarea>
            </div>

            <div>
                <x-label for="rfc" value="RFC" class="text-gray-700 dark:text-gray-300"/>
                <x-input name="rfc" class="w-full" wire:model='rfc'/>
            </div>

            <div class="text-center">
                <x-button class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg">Guardar</x-button>
            </div>
        </form>
    </div>

    <div class="mt-10">
        <table class="w-full table-auto bg-gray-50 dark:bg-gray-800 text-gray-700 dark:text-gray-300 shadow-md rounded-lg">
            <thead class="bg-gray-100 dark:bg-gray-700">
                <tr>
                    <th class="px-4 py-2">ID</th>
                    <th class="px-4 py-2">RFC</th>
                    <th class="px-4 py-2">Nombre</th>
                    <th class="px-4 py-2">Teléfono</th>
                    <th class="px-4 py-2">Email</th>
                    <th class="px-4 py-2">Representante</th>
                    <th class="px-4 py-2">Dirección</th>
                    <th class="px-4 py-2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($suppliers as $supplier)
                <tr class="border-b dark:border-gray-700">
                    <td class="px-4 py-3">{{ $supplier->id }}</td>
                    <td class="px-4 py-3">{{ $supplier->rfc }}</td>
                    <td class="px-4 py-3">{{ $supplier->name }}</td>
                    <td class="px-4 py-3">{{ $supplier->phone }}</td>
                    <td class="px-4 py-3">{{ $supplier->email }}</td>
                    <td class="px-4 py-3">{{ $supplier->manager_name }}</td>
                    <td class="px-4 py-3">{{ $supplier->address }}</td>
                    <td class="px-4 py-3 flex space-x-2">
                        <x-button class="bg-green-600 dark:bg-green-600" wire:click='editar({{ $supplier->id }})'>Editar</x-button>
                        <x-danger-button class="px-4 py-2" wire:click='eliminar({{ $supplier->id }})'>Eliminar</x-danger-button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Modal de edición -->
    @if ($mEdit)
    <div class="fixed inset-0 bg-gray-800 bg-opacity-50 flex justify-center items-center">
        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg">
            <h2 class="text-xl font-semibold text-gray-800 dark:text-white mb-4">Editar Proveedor</h2>
            <form class="space-y-4" wire:submit.prevent='update'>
                <div>
                    <x-label for="name" value="Nombre" class="text-gray-700 dark:text-gray-300"/>
                    <x-input name="name" wire:model='supplierEdit.name' class="w-full"/>
                </div>

                <div>
                    <x-label for="phone" value="Teléfono" class="text-gray-700 dark:text-gray-300"/>
                    <x-input name="phone" class="w-full" wire:model='supplierEdit.phone'/>
                </div>

                <div>
                    <x-label for="email" value="Email" class="text-gray-700 dark:text-gray-300"/>
                    <x-input name="email" class="w-full" wire:model='supplierEdit.email'/>
                </div>

                <div>
                    <x-label for="manager_name" value="Representante" class="text-gray-700 dark:text-gray-300"/>
                    <x-input name="manager_name" class="w-full" wire:model='supplierEdit.manager_name'/>
                </div>

                <div>
                    <x-label for="address" value="Dirección" class="text-gray-700 dark:text-gray-300"/>
                    <textarea id="address" name="address" rows="4" class="block w-full p-2.5 text-gray-900 bg-gray-50 dark:bg-gray-700 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:text-white dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" wire:model='supplierEdit.address'></textarea>
                </div>

                <div>
                    <x-label for="rfc" value="RFC" class="text-gray-700 dark:text-gray-300"/>
                    <x-input name="rfc" class="w-full" wire:model='supplierEdit.rfc'/>
                </div>

                <div class="text-center">
                    <x-button class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg">Actualizar</x-button>
                    <x-danger-button class="bg-red-600 hover:bg-red-700 text-white px-6 py-2 rounded-lg" wire:click="$set('mEdit', false)">Cancelar</x-danger-button>
                </div>
            </form>
        </div>
    </div>
    @endif
</div>
