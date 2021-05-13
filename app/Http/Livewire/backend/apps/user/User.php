<?php

namespace App\Http\Livewire\Backend\Apps\User;

use App\Models\User as ModelsUser;
use Livewire\Component;
use Livewire\WithPagination;

class User extends Component
{

    use WithPagination;
    //protected $paginationTheme = 'bootstrap';


    protected $pagination = 5;

    public function render()
    {
        $page_title = 'Usuários';

        $page_description = 'This is customIcons test page';

        // Lista de Usuarios
        $users = ModelsUser::paginate($this->pagination);

        return view('livewire.backend.apps.user.list-default', [
            'page_title' => $page_title,
            'page_description' => $page_description,
            'users' => $users
        ])
        ->extends('layout.default')
        ->section('content');
    }


}
