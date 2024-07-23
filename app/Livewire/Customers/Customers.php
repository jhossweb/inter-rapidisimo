<?php

namespace App\Livewire\Customers;

use App\Livewire\Customers\Forms\CustomerCreateForm;
use App\Models\Customer;
use Livewire\Component;

class Customers extends Component
{
    public $search = "";
    public $vissible = false;
    public $vModalGuia = false;


    public CustomerCreateForm $customer;

    function mount() {
        $this->customer->user_id = auth()->user()->id;
        
    }

    function save() {
       
        $this->customer->save();
        return $this->redirect("dashboard");
    }

    function openModal () {
        $this->vissible = true;
    }

    function closeModal() {
        $this->vissible = false;
    }

    
    function modalCargarGuía() {
        $this->vModalGuia = true;          
    }

    public function render()
    {
        $customers = Customer::with(["guias", "monto"])
                            ->where("name", "like", "%" . $this->search . "%")
                            ->get();

        return view('livewire.customers.customers')->with([
            'customers' => $customers
        ]);
    }
}
