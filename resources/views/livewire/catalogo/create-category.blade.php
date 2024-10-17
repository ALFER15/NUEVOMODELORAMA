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
                   <x-button class=" bg-green-600" wire:click='editar({{ $category->id }})'>Editar</x-button>
                   <x-danger-button  wire:click='eliminar({{ $category->id }})'>Eliminar</x-danger-button>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>

</div>