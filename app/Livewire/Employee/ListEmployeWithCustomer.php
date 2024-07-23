<?php

namespace App\Livewire\Employee;

use App\Models\Customer;
use Livewire\Component;

class ListEmployeWithCustomer extends Component
{
    public $employees;
    public $textColor;

    function mount($employee) {
        $this->employees = Customer::where("user_id", $employee)->get();

    }

    public function render()
    {
        return view('livewire.employee.list-employe-with-customer');
    }
}
