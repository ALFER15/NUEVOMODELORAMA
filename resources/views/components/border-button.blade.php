<button {{$attributes->merge(['type'=>'button', 'class' => 'inline-felx items-center px-4 py-2 border border-green-600 text-green-600 bg-white hover:bg-green-600 
hover:text-white rounded-md font-semibold text-xs dark:text-gray-800 uppercase tracking-widest dark:bg-white focous:bg-green-700 dark:focus:bg-white active:bg-green-900 
dark:active:bg-gray-300 focus:outline-none foucs:ring-indigo-500 focus:ring-offset-2 disable:opacity-50 duration-150'])}} >  
    {{ $slot }}
</button>