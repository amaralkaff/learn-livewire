<?php

namespace App\Livewire\Users;

use Livewire\Attributes\Title;
use Livewire\Component;




#[Title('Users')]

class Show extends Component
{

    public \App\Models\User $user;

    public function render()
    {
        return view('livewire.users.show')->title($this->user->name);
    }
}
