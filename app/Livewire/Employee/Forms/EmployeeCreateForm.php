<?php

namespace App\Livewire\Employee\Forms;

use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class EmployeeCreateForm extends Form
{
    #[Rule('required|numeric|unique:users,documentId')]
    public $documentId = "";
    
    #[Rule("required")]
    public $name=""; 
    
    #[Rule("required")]
    public $last_name="";
    
    #[Rule("required|email|unique:users,email")]
    public $email="";

    #[Rule("required")]
    public $password="";

    #[Rule("required|exists:roles,id")]
    public $role_id ;

    function save() {
              
        $this->validate();
        
        $employee = User::create(
            $this->only(["documentId", "name", "last_name", "email", "password"])
        );

        $employee->roles()->sync($this->role_id);
    }
}
