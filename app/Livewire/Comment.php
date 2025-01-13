<?php

namespace App\Livewire;

use App\Models\Comment as ModelsComment;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class Comment extends Component
{

    public function render()
    {
        $comments = ModelsComment::with('commentable')->paginate(5);
        return view('livewire.comments.comment',['comments' => $comments]);
    }
}
