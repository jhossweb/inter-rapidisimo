<?php

namespace App\Livewire\Guia;

use App\Models\Guia as ModelsGuia;
use App\Models\Monto;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Guia extends Component
{
    
    public $guias = [], $guiaWithCustomer;
    public $vModalPago = false;

    /* Inputs para abonar */
    #[Rule("required")]
    public $nuevo_monto;    
    
    function mount ($customer){
        
        $this->guias = ModelsGuia::where("customer_id", $customer)->with(["departamento", "municipio"])->get();

        
        $this->guiaWithCustomer = Monto::where("customer_id", $customer)->first();  
              
    }

    function porPagar($customer_id) {
        $this->validate();

        $this->guiaWithCustomer->monto_total -= $this->nuevo_monto;
            
        Monto::updateOrCreate(
            ["customer_id" => $customer_id],
            ["monto_total" => $this->guiaWithCustomer->monto_total]
        );
            
         $this->vModalPago = false;
        
    }

    function openModalPago() {
        $this->vModalPago = true;
    }
    
    public function render()
    {
        return view('livewire.guias.guia');
    }
}
