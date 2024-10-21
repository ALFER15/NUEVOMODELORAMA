<div>

    <div class="mb-4"><span>Crear nueva categoria</span></div>
    <div class="mb-4">
        <form class="max-w-sm mx-auto" wire:submit ='enviar'>
            <x-label for="name" value="Nombre de la Categoria"/>
            <x-input type="text" wire:model='name'/>
            <x-label for="name" value="Descripcion de la categoria"/>
            <x-input type="text" wire:model='description'/><br>
            <x-button class="mt-2">Guardar</x-button>
        </form>


<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Nombre
                </th>
                <th scope="col" class="px-6 py-3">
                    Descripcion
                </th>
                <th scope="col" class="px-6 py-3">
                    Fecha de Creacion
                </th>
                <th scope="col" class="px-6 py-3">
                    Acciones
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr class="bg-white border-b dark:bg-gray-800" wire:key="{{ $category->id}}">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $category->id }}
                </th>
                <td class="px-6 py-4">
                    {{ $category->name }}
                </td>
                <td class="px-6 py-4">
                    {{ $category->description }}
                </td>
                <td class="px-6 py-4">
                    {{ $category->created_at }}
                </td>
                <td class="px-6 py-4">
                    <x-button class=" bg-green-600 dark:bg-green-600" wire:click='editar({{ $category->id }})'>Editar</x-button>
                    <x-danger-button class="" wire:click='eliminar({{ $category }})'>Eliminar</x-danger-button>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
@if ($mEdit)
    <div class="bg-gray-800 bg-opacity-25 fixed inset-0">
        <div class="py-12">
            <div class="bg-white shadow rounded-lg p-6">
                <form class="max-w-lg mx-auto" wire:submit='update'>
                    <div class="mb-4"><span>Editar categoria:</span></div>
                    <x-label class="w-full " for="name" value="Nombre de la categoría"/>
                    <x-input class="w-full " name="name" wire:model='categoryEdit.name'/>
                    <x-label class="w-full " for="description" value="Nombre de la descripción" />
                    <x-input class="w-full " name="description" wire:model='categoryEdit.description' /><br>
                    <x-danger-button class="mt-2" wire:click="set('mEdit', false)">Cancelar</x-danger-button>
                    <x-button class="mt-2">Actualizar</x-button>
                </form>
            </div>
        </div>
    </div>
    @endif
</div> 