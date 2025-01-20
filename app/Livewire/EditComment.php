<?php

namespace App\Livewire;

use App\Models\Comment;
use Livewire\Attributes\Rule;
use Livewire\Component;

class EditComment extends Component
{
    public $commentID, $visitor_id, $employee_id;
    
    #[Rule('required|min:2|max:200')]
    public $newcontent;

    public function mount(Comment $comment, $commentID = null)
    {
        $this->authorize('update',$comment);
        $this->commentID = $comment->id;
        $this->newcontent = $comment->content;
    }

    public function edit()
    {
        $comment = Comment::findOrFail($this->commentID);
        $comment->content = $this->newcontent;

        $comment->save();
        
        session()->flash('success', 'Comment Updated');
        return redirect()->back();
    }


    public function render()
    {
        return view('livewire.comments.edit-comment');
    }
}
