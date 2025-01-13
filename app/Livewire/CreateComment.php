<?php

namespace App\Livewire;

use App\Models\Comment;
use App\Models\Employee;
use App\Models\Visitor;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class CreateComment extends Component
{
    public $visitor_id, $employee_id;

    public $content;

    protected $rules = [
        'content' => 'required|min:2|max:200'
    ];

    public function save()
    {
        $this->validate();

        $user = Auth::user();

        $commentable = null;

        if($this->visitor_id){
            $commentable = Visitor::find($this->visitor_id);
        }elseif($this->employee_id){
            $commentable = Employee::find($this->employee_id);
        }else{
            $commentable = $user;
        }

        $comment = new Comment([
            'content' => $this->content
        ]);

        $comment->commentable_type = get_class($commentable);
        $comment->commentable_id = $commentable->id;
        $comment->save();

        session()->flash('success','Comment created succesfully');
        $this->reset('content');
    }


    public function render()
    {
        return view('livewire.comments.create-comment');
    }
}
