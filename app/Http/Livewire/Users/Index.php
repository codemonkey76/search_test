<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $search = '';

    public function render()
    {
        $users = User::search($this->search)->paginate(15);
        return view('livewire.users.index', compact('users'));
    }
}
