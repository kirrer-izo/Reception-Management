<?php

namespace App\Livewire;

use App\Models\Visitor;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class ViewVisitor extends Component
{
    public $visitorID;
    public $visitor;

    public function mount(Visitor $visitor)
    {
        $this->visitorID = $visitor->id;
        $this->visitor = Visitor::find($this->visitorID);
    }

    public function delete()
    {
        $visitor = Visitor::find($this->visitorID);
        if($visitor){
            $visitor->delete();
        }

        session()->flash('success','Deleted Successfully');
        $this->redirectRoute('visitors');
    }
    public function render()
    {
        $visitor = Visitor::find($this->visitorID);
        return view('livewire.view-visitor',compact('visitor'));
    }
}
