<div>
    
    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-xl sm:rounded-lg">
                <form action="" class="p-5 max-w-2xl w-full  mx-auto" wire:submit="store">
                    
                    <div class="mb-5 mx-auto">
                        <h2 class=" text-2xl">Cargar Guia</h2>
                    </div>

                    <div class="grid md:grid-cols-2 gap-2">

                        <div class="mb-5">
                            <x-label for="number" > N° Guía </x-label>
                            <x-input type="number" wire:model="n_guia" class="w-full" placeholder="N° Guía" />
                            <x-input-error for="n_guia"/>
                        </div>
                        <div class="mb-5">
                            <x-label for="monto" > Monto </x-label>
                            <x-input type="number" wire:model="monto" class="w-full"  placeholder="Monto $" />
                            <x-input-error for="monto"/>
                        </div>
                        
                        <div class="mb-5">
                            <x-label> Cliente </x-label>
                            <select id="countries" wire:model="customer_id" class="border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                <option selected> Elegir Cliente </option>
                                
                                @foreach($this->customers as $customer)
                                    <option value="{{ $customer->id }}"> {{ $customer->name }} </option>
                                @endforeach 
                            </select>
                            <x-input-error for="customer_id"/>
                        </div>
                        
                        <div class="mb-5">
                            <x-label> Departamento </x-label>
                            <select wire:model.live="departamento_id" class="border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                <option selected> Elegir Departamento </option>
                                
                                @foreach($this->dep as $departamento)
                                    <option value="{{ $departamento->id }}" > {{ $departamento->name }} </option>
                                @endforeach 
                            </select>
                            <x-input-error for="departamento_id"/>
                        </div>
    
                        <div class="mb-5">
                            <x-label> Municipio </x-label>
                            <select wire:model = "municipio_id" class="border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                @if($municipios->count() == 0)
                                    <option selected> Elegir un Departamento </option>                            
                                @endif
                                
                                @foreach($this->municipios as $municipio)
                                    <option value="{{ $municipio->id }}"> {{ $municipio->name }} </option>
                                @endforeach 
                            </select>
                            <x-input-error for="municipio_id"/>
                        </div>

                        <div class="mb-5">
                            <x-label> Dirección </x-label>
                            <x-input maxlength="150" wire:model="direccion" class="w-full" placeholder="Ex: 888 Cummings Vista Apt. 101, Susanbury, NY 95473" />
                            <x-input-error for="direccion"/>
                        </div>
                    </div>



                    <x-button type="submit" > Registrar </x-button>

                </form>
            </div>
        </div>
    </div>

</div>