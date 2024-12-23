<?php

namespace App\Livewire;

use App\Models\CallLog;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Url;
use Livewire\Component;

#[Layout('layouts.app')]
class Call extends Component
{

    #[Url]
    public $search;

    public function delete(CallLog $call)
    {
        $call = CallLog::find($call->id);
        if($call){
            $call->delete();
        }
    }
    public function render()
    {
        $calls = CallLog::latest()
        ->where('name','like',"%{$this->search}%")
        ->orWhere('phone_number','like',"%{$this->search}%")
        ->paginate(10);
        
        
        return view('livewire.call',
    ['calls' => $calls]);
    }
}
