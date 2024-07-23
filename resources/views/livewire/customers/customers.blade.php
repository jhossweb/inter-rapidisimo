<div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg p-4">
        <div class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4">
            <div>


                <x-button wire:click="openModal" class="bg-slate-950">
                    Clientes
                </x-button>

                <x-nav-link href="{{ route('guias.create') }}" wire:navigate class="bg-slate-950 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:text-white hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-50 transition ease-in-out duration-150">
                    Cagar Guía
                </x-nav-link>

            </div>
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <x-input wire:model.live="search" type="text" id="table-search" class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500  dark:border-gray-600 dark:placeholder-gray-400 text-gray-900 dark:focus:ring-orange-500 dark:focus:border-orange-500 " placeholder="Buscar Clientes"/>

            </div>
        </div>



        <table class="table-auto w-full bg-white shadow rounded">
            <thead class="border-b border-gray-100">
                <tr>
                    <th class="pl-6 py-6 border-r border-gray-200">
                        <a class="flex items-center text-xs text-gray-500" href="#">
                            <p> Documento </p>
                            <svg class="ml-1 w-2 h-3" width="9" height="12" viewbox="0 0 9 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.85956 7.52666L4.99956 10.3933L2.13956 7.52666C2.01403 7.40113 1.84376 7.3306 1.66623 7.3306C1.48869 7.3306 1.31843 7.40113 1.1929 7.52666C1.06736 7.6522 0.996835 7.82246 0.996835 8C0.996835 8.17753 1.06736 8.34779 1.1929 8.47333L4.52623 11.8067C4.65114 11.9308 4.82011 12.0005 4.99623 12.0005C5.17235 12.0005 5.34132 11.9308 5.46623 11.8067L8.79956 8.47333C8.86172 8.41117 8.91103 8.33738 8.94467 8.25616C8.97831 8.17495 8.99562 8.0879 8.99562 8C8.99562 7.91209 8.97831 7.82504 8.94467 7.74383C8.91103 7.66262 8.86172 7.58882 8.79956 7.52666C8.7374 7.4645 8.66361 7.4152 8.5824 7.38156C8.50118 7.34792 8.41414 7.3306 8.32623 7.3306C8.23832 7.3306 8.15128 7.34792 8.07006 7.38156C7.98885 7.4152 7.91506 7.4645 7.8529 7.52666H7.85956ZM2.13956 4.47333L4.99956 1.60666L7.85956 4.47333C7.98447 4.5975 8.15344 4.66719 8.32956 4.66719C8.50569 4.66719 8.67465 4.5975 8.79956 4.47333C8.92373 4.34842 8.99342 4.17945 8.99342 4.00333C8.99342 3.82721 8.92373 3.65824 8.79956 3.53333L5.46623 0.199997C5.40425 0.137511 5.33052 0.0879151 5.24928 0.0540694C5.16804 0.0202236 5.0809 0.00279808 4.9929 0.00279808C4.90489 0.00279808 4.81775 0.0202236 4.73651 0.0540694C4.65527 0.0879151 4.58154 0.137511 4.51956 0.199997L1.18623 3.53333C1.06158 3.65975 0.992251 3.83051 0.993501 4.00804C0.994751 4.18558 1.06648 4.35534 1.1929 4.48C1.31932 4.60465 1.49008 4.67397 1.66761 4.67272C1.84514 4.67147 2.01491 4.59975 2.13956 4.47333Z" fill="#67798E"></path>
                            </svg>
                        </a>
                    </th>
                    <th class="pl-6 border-r border-gray-200">
                        <a class="flex items-center text-xs text-gray-500" href="#">
                            <p>Nombre</p>
                            <svg class="ml-1 w-2 h-3" width="9" height="12" viewbox="0 0 9 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.85956 7.52666L4.99956 10.3933L2.13956 7.52666C2.01403 7.40113 1.84376 7.3306 1.66623 7.3306C1.48869 7.3306 1.31843 7.40113 1.1929 7.52666C1.06736 7.6522 0.996835 7.82246 0.996835 8C0.996835 8.17753 1.06736 8.34779 1.1929 8.47333L4.52623 11.8067C4.65114 11.9308 4.82011 12.0005 4.99623 12.0005C5.17235 12.0005 5.34132 11.9308 5.46623 11.8067L8.79956 8.47333C8.86172 8.41117 8.91103 8.33738 8.94467 8.25616C8.97831 8.17495 8.99562 8.0879 8.99562 8C8.99562 7.91209 8.97831 7.82504 8.94467 7.74383C8.91103 7.66262 8.86172 7.58882 8.79956 7.52666C8.7374 7.4645 8.66361 7.4152 8.5824 7.38156C8.50118 7.34792 8.41414 7.3306 8.32623 7.3306C8.23832 7.3306 8.15128 7.34792 8.07006 7.38156C7.98885 7.4152 7.91506 7.4645 7.8529 7.52666H7.85956ZM2.13956 4.47333L4.99956 1.60666L7.85956 4.47333C7.98447 4.5975 8.15344 4.66719 8.32956 4.66719C8.50569 4.66719 8.67465 4.5975 8.79956 4.47333C8.92373 4.34842 8.99342 4.17945 8.99342 4.00333C8.99342 3.82721 8.92373 3.65824 8.79956 3.53333L5.46623 0.199997C5.40425 0.137511 5.33052 0.0879151 5.24928 0.0540694C5.16804 0.0202236 5.0809 0.00279808 4.9929 0.00279808C4.90489 0.00279808 4.81775 0.0202236 4.73651 0.0540694C4.65527 0.0879151 4.58154 0.137511 4.51956 0.199997L1.18623 3.53333C1.06158 3.65975 0.992251 3.83051 0.993501 4.00804C0.994751 4.18558 1.06648 4.35534 1.1929 4.48C1.31932 4.60465 1.49008 4.67397 1.66761 4.67272C1.84514 4.67147 2.01491 4.59975 2.13956 4.47333Z" fill="#67798E"></path>
                            </svg>
                        </a>
                    </th>
                    <th class="pl-6 border-r border-gray-200">
                        <a class="flex items-center text-xs text-gray-500" href="#">
                            <p> Correo </p>
                            <svg class="ml-1 w-2 h-3" width="9" height="12" viewbox="0 0 9 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.85956 7.52666L4.99956 10.3933L2.13956 7.52666C2.01403 7.40113 1.84376 7.3306 1.66623 7.3306C1.48869 7.3306 1.31843 7.40113 1.1929 7.52666C1.06736 7.6522 0.996835 7.82246 0.996835 8C0.996835 8.17753 1.06736 8.34779 1.1929 8.47333L4.52623 11.8067C4.65114 11.9308 4.82011 12.0005 4.99623 12.0005C5.17235 12.0005 5.34132 11.9308 5.46623 11.8067L8.79956 8.47333C8.86172 8.41117 8.91103 8.33738 8.94467 8.25616C8.97831 8.17495 8.99562 8.0879 8.99562 8C8.99562 7.91209 8.97831 7.82504 8.94467 7.74383C8.91103 7.66262 8.86172 7.58882 8.79956 7.52666C8.7374 7.4645 8.66361 7.4152 8.5824 7.38156C8.50118 7.34792 8.41414 7.3306 8.32623 7.3306C8.23832 7.3306 8.15128 7.34792 8.07006 7.38156C7.98885 7.4152 7.91506 7.4645 7.8529 7.52666H7.85956ZM2.13956 4.47333L4.99956 1.60666L7.85956 4.47333C7.98447 4.5975 8.15344 4.66719 8.32956 4.66719C8.50569 4.66719 8.67465 4.5975 8.79956 4.47333C8.92373 4.34842 8.99342 4.17945 8.99342 4.00333C8.99342 3.82721 8.92373 3.65824 8.79956 3.53333L5.46623 0.199997C5.40425 0.137511 5.33052 0.0879151 5.24928 0.0540694C5.16804 0.0202236 5.0809 0.00279808 4.9929 0.00279808C4.90489 0.00279808 4.81775 0.0202236 4.73651 0.0540694C4.65527 0.0879151 4.58154 0.137511 4.51956 0.199997L1.18623 3.53333C1.06158 3.65975 0.992251 3.83051 0.993501 4.00804C0.994751 4.18558 1.06648 4.35534 1.1929 4.48C1.31932 4.60465 1.49008 4.67397 1.66761 4.67272C1.84514 4.67147 2.01491 4.59975 2.13956 4.47333Z" fill="#67798E"></path>
                            </svg>
                        </a>
                    </th>
                    <th class="border-r border-gray-200">
                        <a class="flex items-center justify-center text-xs text-gray-500" href="#">
                            <p> Deuda </p>
                            <svg class="ml-1 w-2 h-3" width="9" height="12" viewbox="0 0 9 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.85956 7.52666L4.99956 10.3933L2.13956 7.52666C2.01403 7.40113 1.84376 7.3306 1.66623 7.3306C1.48869 7.3306 1.31843 7.40113 1.1929 7.52666C1.06736 7.6522 0.996835 7.82246 0.996835 8C0.996835 8.17753 1.06736 8.34779 1.1929 8.47333L4.52623 11.8067C4.65114 11.9308 4.82011 12.0005 4.99623 12.0005C5.17235 12.0005 5.34132 11.9308 5.46623 11.8067L8.79956 8.47333C8.86172 8.41117 8.91103 8.33738 8.94467 8.25616C8.97831 8.17495 8.99562 8.0879 8.99562 8C8.99562 7.91209 8.97831 7.82504 8.94467 7.74383C8.91103 7.66262 8.86172 7.58882 8.79956 7.52666C8.7374 7.4645 8.66361 7.4152 8.5824 7.38156C8.50118 7.34792 8.41414 7.3306 8.32623 7.3306C8.23832 7.3306 8.15128 7.34792 8.07006 7.38156C7.98885 7.4152 7.91506 7.4645 7.8529 7.52666H7.85956ZM2.13956 4.47333L4.99956 1.60666L7.85956 4.47333C7.98447 4.5975 8.15344 4.66719 8.32956 4.66719C8.50569 4.66719 8.67465 4.5975 8.79956 4.47333C8.92373 4.34842 8.99342 4.17945 8.99342 4.00333C8.99342 3.82721 8.92373 3.65824 8.79956 3.53333L5.46623 0.199997C5.40425 0.137511 5.33052 0.0879151 5.24928 0.0540694C5.16804 0.0202236 5.0809 0.00279808 4.9929 0.00279808C4.90489 0.00279808 4.81775 0.0202236 4.73651 0.0540694C4.65527 0.0879151 4.58154 0.137511 4.51956 0.199997L1.18623 3.53333C1.06158 3.65975 0.992251 3.83051 0.993501 4.00804C0.994751 4.18558 1.06648 4.35534 1.1929 4.48C1.31932 4.60465 1.49008 4.67397 1.66761 4.67272C1.84514 4.67147 2.01491 4.59975 2.13956 4.47333Z" fill="#67798E"></path>
                            </svg>
                        </a>
                    </th>
                    @can("guias.show")
                    <th class="pl-6 border-r border-gray-200">
                        <a class="flex items-center text-xs text-gray-500" href="#">
                            <p> Detalle </p>
                            <svg class="ml-1 w-2 h-3" width="9" height="12" viewbox="0 0 9 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.85956 7.52666L4.99956 10.3933L2.13956 7.52666C2.01403 7.40113 1.84376 7.3306 1.66623 7.3306C1.48869 7.3306 1.31843 7.40113 1.1929 7.52666C1.06736 7.6522 0.996835 7.82246 0.996835 8C0.996835 8.17753 1.06736 8.34779 1.1929 8.47333L4.52623 11.8067C4.65114 11.9308 4.82011 12.0005 4.99623 12.0005C5.17235 12.0005 5.34132 11.9308 5.46623 11.8067L8.79956 8.47333C8.86172 8.41117 8.91103 8.33738 8.94467 8.25616C8.97831 8.17495 8.99562 8.0879 8.99562 8C8.99562 7.91209 8.97831 7.82504 8.94467 7.74383C8.91103 7.66262 8.86172 7.58882 8.79956 7.52666C8.7374 7.4645 8.66361 7.4152 8.5824 7.38156C8.50118 7.34792 8.41414 7.3306 8.32623 7.3306C8.23832 7.3306 8.15128 7.34792 8.07006 7.38156C7.98885 7.4152 7.91506 7.4645 7.8529 7.52666H7.85956ZM2.13956 4.47333L4.99956 1.60666L7.85956 4.47333C7.98447 4.5975 8.15344 4.66719 8.32956 4.66719C8.50569 4.66719 8.67465 4.5975 8.79956 4.47333C8.92373 4.34842 8.99342 4.17945 8.99342 4.00333C8.99342 3.82721 8.92373 3.65824 8.79956 3.53333L5.46623 0.199997C5.40425 0.137511 5.33052 0.0879151 5.24928 0.0540694C5.16804 0.0202236 5.0809 0.00279808 4.9929 0.00279808C4.90489 0.00279808 4.81775 0.0202236 4.73651 0.0540694C4.65527 0.0879151 4.58154 0.137511 4.51956 0.199997L1.18623 3.53333C1.06158 3.65975 0.992251 3.83051 0.993501 4.00804C0.994751 4.18558 1.06648 4.35534 1.1929 4.48C1.31932 4.60465 1.49008 4.67397 1.66761 4.67272C1.84514 4.67147 2.01491 4.59975 2.13956 4.47333Z" fill="#67798E"></path>
                            </svg>
                        </a>
                    </th>
                    @endcan
                </tr>
            </thead>
            <tbody>
                @foreach($customers as $index => $customer)
                <tr class="text-xs {{ $index % 2 === 0 ? 'bg-blue-50' : 'bg-white' }} border">
                    <td class="pl-6 py-6 border-l-0 border border-gray-200">{{ $customer->documentId }}</td>
                    <td class="pl-6 border border-gray-200"> {{ $customer->name }} </td>
                    <td class="pl-6 border border-gray-200"> {{ $customer->email }} </td>
                    <td class="text-center border border-gray-200 {{ $customer->monto && $customer->monto->monto_total > 1000000 ? 'text-red-700' : 'text-gray-700' }}" > 
                        {{ $customer->monto ? $customer->monto->monto_total : '' }} 
                    </td>
                    
                    @can("guias.show")
                    <td class="pl-6 border border-gray-200"> 
                        @if($customer->monto)
                            <a href="/guias/{{$customer->id}}" wire:navigate.hover class="font-medium text-blue-600 dark:text-blue-500 hover:underline"> 
                                Detalle 
                            </a> 
                        @endif
                    </td>
                    @endcan

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    {{-- Modal --}}

    <form class="max-w-sm mx-auto" wire:submit="save">
        <x-dialog-modal wire:model="vissible">
            <x-slot name="title">
                <h3>Registrar Cliente</h3>
            </x-slot>
            <x-slot name="content">


                <div class="grid md:grid-cols-2 md:gap-6">

                    <div class="mb-5">
                        <x-label for="documentId"> Documento </x-label>
                        <x-input type="number" class="w-full" placeholder="Documento" wire:model="customer.documentId" />
                        <x-input-error for="customer.documentId" />
                    </div>
                    <div class="mb-5">
                        <x-label for="name"> Nombre </x-label>
                        <x-input type="text" class="w-full" placeholder="Nombre" wire:model="customer.name" />
                        <x-input-error for="customer.name" />
                    </div>
                </div>

                <div class="grid md:grid-cols-2 md:gap-6">

                    <div class="mb-5">
                        <x-label for="last_name"> Apellido </x-label>
                        <x-input type="text" class="w-full" placeholder="Apellido" wire:model="customer.last_name" />
                        <x-input-error for="customer.last_name" />
                    </div>
                    <div class="mb-5">
                        <x-label for="email"> Correo </x-label>
                        <x-input type="email" class="w-full" placeholder="Correo" wire:model="customer.email" />
                        <x-input-error for="customer.email" />
                    </div>
                </div>

            </x-slot>
            <x-slot name="footer">
                <x-button type="submit" > Registrar </x-button>
                <x-danger-button wire:click="closeModal"> Cerrar </x-danger-button>
            </x-slot>
        </x-dialog-modal>
    </form>
</div>