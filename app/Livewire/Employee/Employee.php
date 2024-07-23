<?php

namespace App\Livewire\Employee;

use App\Livewire\Employee\Forms\EmployeeCreateForm;
use App\Livewire\Employee\Forms\EmployeeEditForm;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Livewire\Component;

class Employee extends Component
{
    public $vissible = false;
    public $roles = [];
    public $search;

    public EmployeeCreateForm $employee;
    public EmployeeEditForm $employeeEdit;


    function mount()
    {
        $this->roles = Role::all();
    }

    function openModal()
    {
        $this->vissible = true;
    }

    function edit($employee)
    {
        $this->resetValidation();

        $this->employeeEdit->edit($employee);
    }

    function update()
    {
        $this->employeeEdit->update();
    }

    function save()
    {
        $this->employee->save();
        $this->vissible = false;
    }

    function destroy()
    {
        $this->employeeEdit->destroy();
        $this->employeeEdit->openModalEdit = false;
    }

    public function render()
    {
        $users = User::with("customers")->where(function ($query) {
            $query->where('name', 'like', '%' . $this->search . '%')
                ->orWhere('documentId', 'like', '%' . $this->search . '%');
        })
            ->get();

        return view('livewire.employee.employee', compact('users'));
    }
}
