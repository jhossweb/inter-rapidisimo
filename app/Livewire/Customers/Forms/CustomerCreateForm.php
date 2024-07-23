<?php

namespace App\Livewire\Customers\Forms;

use App\Models\Customer;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class CustomerCreateForm extends Form
{
    
    #[Rule('required|numeric|unique:customers,documentId')]
    public $documentId = "";
    
    #[Rule("required")]
    public $name=""; 
    
    #[Rule("required")]
    public $last_name="";
    
    #[Rule("required|email|unique:customers,email")]
    public $email="";

    #[Rule("required|exists:users,id")]
    public $user_id = "";


    function save() {
        
        $this->validate();
        
        Customer::create(
            $this->only(["documentId", "name", "last_name", "email", "user_id"])
        );
    }
}
