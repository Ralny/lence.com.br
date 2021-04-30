<?php

namespace App\Http\Livewire\Backend;

use Livewire\Component;

class DefaultCrud extends Component
{
    public function render()
    {
        return view('livewire.backend.default-crud')
                ->extends('layout.default')
                ->section('content');
    }
}
