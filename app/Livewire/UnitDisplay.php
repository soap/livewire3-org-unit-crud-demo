<?php

namespace App\Livewire;

use App\Models\OrganizationUnit;
use Livewire\Component;

class UnitDisplay extends Component
{
    public $orgUnit;

    public function mount($orgUnit)
    {
        $this->orgUnit = $orgUnit;
    }

    public function render()
    {
        return view('livewire.units.unit-display');
    }
}
