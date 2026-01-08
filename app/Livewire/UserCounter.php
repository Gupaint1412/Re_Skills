<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
class UserCounter extends Component
{
    public function render()
    {
        return view('livewire.user-counter',[
            'count' => User::count(),
        ]);
    }
}
