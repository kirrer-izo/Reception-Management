<?php

namespace App\Livewire;

use App\Models\User as ModelsUser;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('layouts.app')]
class User extends Component
{
    public $search;
    
    use WithPagination;
    public function render()
    {
        $users = ModelsUser::latest()
        ->where('name','like',"%$this->search%")
        ->orWhere('email','like',"%$this->search%")
        ->paginate(5);
        return view('livewire.user',compact('users'));
    }
}
