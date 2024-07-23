<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-8 my-8">
    <div class="bg-white shadow-xl sm:rounded-lg p-4">

        <div class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4">
            <div>
                <x-button wire:click="openModal" class="mr-2 bg-slate-950">Nuevo</x-button>



            </div>
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <x-input wire:model.live="search" type="text" id="table-search" class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-orange-500 focus:border-orange-500  dark:border-gray-600 dark:placeholder-gray-400 text-gray-900 dark:focus:ring-orange-500 dark:focus:border-orange-500 " placeholder="Buscar Empleados" />

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
                    <th class="pl-6 border-r border-gray-200">
                        <a class="flex items-center text-xs text-gray-500" href="#">
                            <p> Detalle </p>
                            <svg class="ml-1 w-2 h-3" width="9" height="12" viewbox="0 0 9 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.85956 7.52666L4.99956 10.3933L2.13956 7.52666C2.01403 7.40113 1.84376 7.3306 1.66623 7.3306C1.48869 7.3306 1.31843 7.40113 1.1929 7.52666C1.06736 7.6522 0.996835 7.82246 0.996835 8C0.996835 8.17753 1.06736 8.34779 1.1929 8.47333L4.52623 11.8067C4.65114 11.9308 4.82011 12.0005 4.99623 12.0005C5.17235 12.0005 5.34132 11.9308 5.46623 11.8067L8.79956 8.47333C8.86172 8.41117 8.91103 8.33738 8.94467 8.25616C8.97831 8.17495 8.99562 8.0879 8.99562 8C8.99562 7.91209 8.97831 7.82504 8.94467 7.74383C8.91103 7.66262 8.86172 7.58882 8.79956 7.52666C8.7374 7.4645 8.66361 7.4152 8.5824 7.38156C8.50118 7.34792 8.41414 7.3306 8.32623 7.3306C8.23832 7.3306 8.15128 7.34792 8.07006 7.38156C7.98885 7.4152 7.91506 7.4645 7.8529 7.52666H7.85956ZM2.13956 4.47333L4.99956 1.60666L7.85956 4.47333C7.98447 4.5975 8.15344 4.66719 8.32956 4.66719C8.50569 4.66719 8.67465 4.5975 8.79956 4.47333C8.92373 4.34842 8.99342 4.17945 8.99342 4.00333C8.99342 3.82721 8.92373 3.65824 8.79956 3.53333L5.46623 0.199997C5.40425 0.137511 5.33052 0.0879151 5.24928 0.0540694C5.16804 0.0202236 5.0809 0.00279808 4.9929 0.00279808C4.90489 0.00279808 4.81775 0.0202236 4.73651 0.0540694C4.65527 0.0879151 4.58154 0.137511 4.51956 0.199997L1.18623 3.53333C1.06158 3.65975 0.992251 3.83051 0.993501 4.00804C0.994751 4.18558 1.06648 4.35534 1.1929 4.48C1.31932 4.60465 1.49008 4.67397 1.66761 4.67272C1.84514 4.67147 2.01491 4.59975 2.13956 4.47333Z" fill="#67798E"></path>
                            </svg>
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $index => $employee)
                <tr class="text-xs {{ $index % 2 === 0 ? 'bg-blue-50' : 'bg-white' }} border">
                    <td class="pl-6 py-6 border-l-0 border border-gray-200"><a href="#" wire:click="edit({{ $employee->id }})"> {{ $employee->documentId }} </a></td>
                    <td class="pl-6 border border-gray-200"> {{ $employee->name }} </td>
                    <td class="pl-6 border border-gray-200"> {{ $employee->email }} </td>

                    <td class="pl-6 border border-gray-200">
                        @if($employee->customers)
                        <a href="{{ route('employee.show', $employee->id) }}" wire:navigate.hover class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                            Detalle
                        </a>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

    {{-- Modal Crear Empleado--}}

    <form class="max-w-sm mx-auto" wire:submit="save">
        <x-dialog-modal wire:model="vissible">
            <x-slot name="title">
                <h3>Registro de Empleados</h3>
            </x-slot>

            <x-slot name="content">
                <div class="grid md:grid-cols-2 md:gap-6">
                    <div class="mb-5">
                        <x-label for="documentId"> Documento </x-label>
                        <x-input type="number" class="w-full" placeholder="Documento" wire:model="employee.documentId" />
                        <x-input-error for="employee.documentId" />
                    </div>
                    <div class="mb-5">
                        <x-label for="name"> Nombre </x-label>
                        <x-input type="text" class="w-full" placeholder="Nombre" wire:model="employee.name" />
                        <x-input-error for="employee.name" />
                    </div>
                </div>

                <div class="grid md:grid-cols-2 md:gap-6">
                    <div class="mb-5">
                        <x-label for="last_name"> Apellido </x-label>
                        <x-input type="text" class="w-full" placeholder="Apellido" wire:model="employee.last_name" />
                        <x-input-error for="employee.last_name" />
                    </div>
                    <div class="mb-5">
                        <x-label for="email"> Correo </x-label>
                        <x-input type="email" class="w-full" placeholder="Correo" wire:model="employee.email" />
                        <x-input-error for="employee.email" />
                    </div>
                </div>

                <div class="grid md:grid-cols-2 md:gap-6">
                    <div class="mb-5">
                        <x-label for="password"> Contraseña </x-label>
                        <x-input type="password" class="w-full" placeholder="Contraseña" wire:model="employee.password" />
                        <x-input-error for="employee.password" />
                    </div>
                    <div class="mb-5">
                        <x-label for="rol"> Rol </x-label>
                        <select id="countries" wire:model="employee.role_id" class="border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option value=""> Escoger Rol </option>

                            @foreach($this->roles as $rol)
                            <option value="{{ $rol->id }}"> {{ $rol->name }} </option>
                            @endforeach

                        </select>
                        <x-input-error for="employee.rol_id" />
                    </div>
                </div>

            </x-slot>

            <x-slot name="footer">
                <x-button type="submit"> Registrar </x-button>
                <x-danger-button> Cancelar </x-danger-button>
            </x-slot>
        </x-dialog-modal>
    </form>


    {{-- Modal Actualizar Empleado --}}
    <form class="max-w-sm mx-auto" wire:submit="update">
        <x-dialog-modal wire:model="employeeEdit.openModalEdit">
            <x-slot name="title">
                <h3>Actualización de Empleados</h3>
            </x-slot>

            <x-slot name="content">
                <div class="grid md:grid-cols-2 md:gap-6">
                    <div class="mb-5">
                        <x-label for="documentId"> Documento </x-label>
                        <x-input type="number" class="w-full" placeholder="Documento" wire:model="employeeEdit.documentId" />
                        <x-input-error for="employeeEdit.documentId" />
                    </div>
                    <div class="mb-5">
                        <x-label for="name"> Nombre </x-label>
                        <x-input type="text" class="w-full" placeholder="Nombre" wire:model="employeeEdit.name" />
                        <x-input-error for="employeeEdit.name" />
                    </div>
                </div>

                <div class="grid md:grid-cols-2 md:gap-6">
                    <div class="mb-5">
                        <x-label for="last_name"> Apellido </x-label>
                        <x-input type="text" class="w-full" placeholder="Apellido" wire:model="employeeEdit.last_name" />
                        <x-input-error for="employeeEdit.last_name" />
                    </div>
                    <div class="mb-5">
                        <x-label for="email"> Correo </x-label>
                        <x-input type="email" class="w-full" placeholder="Correo" wire:model="employeeEdit.email" />
                        <x-input-error for="employeeEdit.email" />
                    </div>
                </div>

                <div class="grid md:grid-cols-2 md:gap-6">

                    <div class="mb-5">
                        <x-label for="rol"> Rol </x-label>
                        <select id="countries" wire:model="employeeEdit.role_id" class="border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option value=""> Escoger Rol </option>

                            @foreach($this->roles as $rol)
                            <option value="{{ $rol->id }}"> {{ $rol->name }} </option>
                            @endforeach

                        </select>
                        <x-input-error for="employeeEdit.rol_id" />
                    </div>
                </div>

            </x-slot>

            <x-slot name="footer">
                <x-button type="submit"> Actualizar </x-button>
                <x-danger-button> Cancelar </x-danger-button>
            </x-slot>
        </x-dialog-modal>
    </form>

    {{-- Lista de empleados --}}
    <x-dialog-modal wire:model="openModalCustomer">
        <x-slot name="title">
            <h3> Lista de Empleados </h3>
        </x-slot>

        <x-slot name="content">


            <div class="w-full max-w-md p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                <div class="flex items-center justify-between mb-4">
                    <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Latest Customers</h5>
                   
                </div>
                <div class="flow-root">
                    <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                        
                    </ul>
                </div>
            </div>

        </x-slot>

        <x-slot name="footer"></x-slot>
    </x-dialog-modal>




</div>