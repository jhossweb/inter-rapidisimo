<div class="py-12 min-w-full">
    
    
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-8 ">
        <div class="bg-white shadow-xl sm:rounded-lg p-4" >
            <div class="my-2">
                <x-button wire:click="openModalPago" class="bg-slate-950"> Pagar </x-button>
            </div>

            <a href="#" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-orange-100 dark:border-orange-700 dark:bg-orange-600 dark:hover:bg-orange-700">

                <div class="flex flex-col justify-between p-4 leading-normal">
                    <p class="mb-3 font-normal text-neutral-50 "> Por Pagar </p>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"> {{ e($this->guiaWithCustomer->monto_total) }} cop </h5>
                </div>
            </a>
        </div>

        <div class="grid grid-cols-1 sm:w-full md:grid-cols-2 lg:grid-cols-4 gap-4 mx-auto my-8 bg-white shadow-xl sm:rounded-lg p-4">
            
            @foreach($guias as $guia)
            <div class="mx-auto max-w-xl w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-slate-950 dark:border-gray-700">
                <h5 class="mb-4 text-xl font-medium text-gray-500 dark:text-gray-400">N° Guía {{ $guia->n_guia }}</h5>
                <div class="text-gray-900 dark:text-white">
                    <span class="text-2xl font-semibold">$</span>
                    <span class="text-4xl font-extrabold tracking-tight">{{ $guia->monto }}</span>
                </div>
                <ul role="list" class="space-y-5 my-7">
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-blue-700 dark:text-amber-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                        </svg>
                        <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400 ms-3">
                            {{ $guia->departamento->name }} - {{ $guia->municipio->name }}
                        </span>
                    </li>
                </ul>
                <p class="text-white">
                    {{ $guia->direccion }}
                </p>
            </div>
            @endforeach
    
        </div>
    </div>


    <form class="grid grid-cols-3 gap-4" wire:submit="porPagar({{ $this->guiaWithCustomer->customer_id }})">
        <x-dialog-modal wire:model="vModalPago">
            <x-slot name="title">
                <h3>Pago Total</h3>
            </x-slot>

            <x-slot name="content">

                <div class="mb-4">
                    <x-label for="nuevo_monto"> Monto a Abonar </x-label>
                    <x-input type="number" wire:model="nuevo_monto" class="w-full" />
                </div>

            </x-slot>
            <x-slot name="footer">

                <x-button type="submit"> Abonar </x-button>
            </x-slot>
        </x-dialog-modal>
</div>