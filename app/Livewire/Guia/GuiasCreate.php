<?php

namespace App\Livewire\Guia;

use App\Models\Customer;
use App\Models\Departamento;
use App\Models\Guia;
use App\Models\Monto;
use App\Models\Municipio;
use Livewire\Attributes\Rule;
use Livewire\Component;

class GuiasCreate extends Component
{
    public $customers, $sumMonto;

    /** Departamentos */
    public $dep, $dep_id;
    
    /** Municipios */
    public $municipios = [];

    // Datos del formulario
    #[Rule("required|unique:guias,n_guia")]
    public $n_guia;
    
    #[Rule("required")]
    public $monto;

    #[Rule("required")]
    public $direccion;
    
    #[Rule("required|exists:customers,id")]
    public $customer_id;

    #[Rule("required|exists:departamentos,id")]
    public $departamento_id;

    #[Rule("required|exists:municipios,id")]
    public $municipio_id;

    function mount(Customer $customer) {
        $this->customers = $customer->all();
        $this->dep = Departamento::all();
        
        $this->municipios = collect();
    }

    function updatedDepartamentoId($dep_id) {
        $this->municipios = Municipio::with("departamento")->where("departamento_id", $dep_id)->get();

    }

    function store() {

        $this->validate();
        
        Guia::create($this->all());
        
        $this->sumMonto = Guia::where("customer_id", $this->customer_id)->sum("monto");
        Monto::updateOrCreate(
            ["customer_id" => $this->customer_id],
            ["monto_total" => $this->sumMonto]
        );
        
        return redirect('dashboard');
    }

    public function render()
    {

        return view('livewire.guias.guias-create');
    }
}
