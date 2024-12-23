<?php

namespace App\Livewire;

use App\Models\Visitor;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class EditVistor extends Component
{
    public $visitorID;

    public $newdate,$newname,$newphone_number,$newemail,$newcompany,$newhost_name,$newcheck_in_time,$newcheck_out_time;

    protected $rules = [
        'newdate' => 'required|date',
        'newname' => 'required|max:255',
        'newphone_number' => 'required|max:15',
        'newemail' => 'required|email|max:255',
        'newcompany' => 'nullable|max:255',
        'newhost_name' => 'required|max:255',
        'newcheck_in_time' => 'required|date_format:H:i',
        'newcheck_out_time' => 'nullable|date_format:H:i|after:check_in_time',
        ];
    public function mount(Visitor $visitor)
    {
        $this->visitorID = $visitor->id;
        $this->newdate = $visitor->date;
        $this->newname = $visitor->name;
        $this->newphone_number = $visitor->phone_number;
        $this->newemail = $visitor->email;
        $this->newcompany = $visitor->company;
        $this->newhost_name = $visitor->host_name;
        $this->newcheck_in_time = $visitor->check_in_time;
        $this->newcheck_out_time = $visitor->check_out_time;
        
    }


    public function edit()
    {
        $this->validate();
        $visitor = Visitor::find($this->visitorID);

        $visitor->date = $this->newdate;
        $visitor->name = $this->newname;
        $visitor->phone_number = $this->newphone_number;
        $visitor->email = $this->newemail;
        $visitor->company = $this->newcompany;
        $visitor->host_name = $this->newhost_name;
        $visitor->check_in_time = $this->newcheck_in_time;
        $visitor->check_out_time = $this->newcheck_out_time;

        $visitor->save();

        return redirect()->route('vistors');
        
    }
    public function render()
    {
        return view('livewire.edit-vistor');
    }
}
