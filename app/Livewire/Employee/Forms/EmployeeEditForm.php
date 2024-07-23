<?php

namespace App\Livewire\Employee\Forms;

use App\Models\User;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class EmployeeEditForm extends Form
{
    public $openModalEdit = false, $employee_id;
    
    #[Rule('required|numeric|unique:users,documentId')]
    public $documentId = "";
    
    #[Rule("required")]
    public $name=""; 
    
    #[Rule("required")]
    public $last_name="";
    
    #[Validate("required|email")]
    public $email="";

    #[Rule("required|exists:roles,id")]
    public $role_id =[];


    function edit($employee_id) {
        
        $this->openModalEdit = true;
        $this->employee_id = $employee_id;

        $employee = User::find($employee_id);

        $this->documentId = $employee->documentId;
        $this->name = $employee->name;
        $this->last_name = $employee->last_name;
        $this->email = $employee->email;
        $this->role_id = $employee->roles->pluck("id")->toArray();
    }

    function update() {
        $this->validate();
        $employee = User::find($this->employee_id);
        
         $employee->update($this->all());
        

        $employee->roles()->sync($this->role_id);
        $this->reset();
    }

    function destroy() {
        $employee = User::find($this->employee_id);
        $employee->delete();
    }
}
