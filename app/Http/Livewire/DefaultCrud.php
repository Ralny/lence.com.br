<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DefaultCrud extends Component
{
    public function render()
    {
        return view('livewire.default-crud')
                ->extends('layout.default')
                ->section('content');
    }
}
