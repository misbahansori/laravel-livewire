<?php

namespace App\Http\Livewire;

use App\User;
use Livewire\Component;

class UserFollower extends Component
{
    public $userId;
    public $name;
    public $detail;

    public function mount($userId, $name)
    {
        $this->userId = $userId;
        $this->name = $name;
    }
    
    public function loadDetail()
    {
        $this->detail = User::find($this->userId);
    }

    public function render()
    {
        return view('livewire.user-follower');
    }
}
