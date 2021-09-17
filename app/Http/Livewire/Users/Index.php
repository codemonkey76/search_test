<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $search = '';
    public $sortDirection = 'asc';
    public $sortField = 'name';
    public $showEditModal = true;

    protected $queryString = ['sortField', 'sortDirection'];

    public function sortBy($field)
    {
        $this->sortDirection = $this->sortField === $field ? $this->sortDirection === 'asc' ? 'desc' : 'asc' : 'asc';

        $this->sortField = $field;
    }

    public function edit()
    {
        $this->showEditModal = true;
    }
    public function render()
    {
        $users = User::search($this->search)
                     ->orderBy($this->sortField, $this->sortDirection)->paginate(15);
        return view('livewire.users.index', compact('users'));
    }
}
