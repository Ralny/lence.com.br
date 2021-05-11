<?php

namespace App\Http\Livewire\Backend\Apps\User;

use App\Models\User as ModelsUser;
use Livewire\Component;

class User extends Component
{

    public function render()
    {

        $users = ModelsUser::get();

        return view('livewire.backend.apps.user.list-default', [
            'users' => $users
        ])
        ->extends('layout.default')
        ->section('content');
    }
}
