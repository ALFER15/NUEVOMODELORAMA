<div>
    <span>Agregar branch nuevo</span>
    <div class ="ml2 mr-4 mb-4 mt-4">
        <form class="max-w-sm mx-auto"wire:submit='enviar'>
            <x-label for="rfc" value="RFC"/>
            <x-input name="rfc" wire:model='rfc'/>

            <x-label for="name" value="Nombre"/>
            <x-input name="name" wire:model='name'/>

            <x-label for="phone" value="Telefono"/>
            <x-input name="phone" class="mb-2" wire:model='phone'/>

            <x-label for="email" value="Email"/>
            <x-input name="emai" wire:model='email'/>
            

            <x-input name="addres"/>
            <textarea id="address" name="address" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Direccion"></textarea>
           
            <x-label name="rfc" value="RFC"/>
            <x-input name="rfc" wire:model='rfc'/><br>

            <x-button class="mt-2">Guardar</x-button>
        </form>    
    </div>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    RFC
                </th>
                <th scope="col" class="px-6 py-3">
                    Nombre
                </th>
                <th scope="col" class="px-6 py-3">
                    Telefono
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3">
                    Representante
                </th>
                <th scope="col" class="px-6 py-3">
                    Direccion
                </th>
              
            </tr>
        </thead>
        <tbody>
            @foreach ($suppliers as $supplier)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $supplier->id }}
                </th>
                <td class="px-6 py-4">
                    {{ $supplier->rfc }}
                </td>
                <td class="px-6 py-4">
                    {{ $supplier->name }}
                </td>
                <td class="px-6 py-4">
                    {{ $supplier->phone }}
                </td>
                <td class="px-6 py-4">
                    {{ $supplier->email }}
                </td>
                <td class="px-6 py-4">
                    {{ $supplier->manager_name }}
                </td>
                <td class="px-6 py-4">
                    {{ $supplier->address }}
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>