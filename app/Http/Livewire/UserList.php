<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UserList extends Component
{
    /**
     * $user
     *
     * @var \App\User
     */
    public $user;

    /**
     * $isShown
     *
     * @var boolean
     */
    public $isShown = false;

    public function mount($user)
    {
        $this->user = $user;
    }

    public function toggle()
    {
        $this->isShown = ! $this->isShown;
    }

    public function render()
    {
        return view('livewire.user-list');
    }
}
