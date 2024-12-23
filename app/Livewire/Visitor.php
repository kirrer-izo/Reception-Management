<?php

namespace App\Livewire;

use App\Models\Visitor as ModelsVisitor;
use Carbon\Carbon;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;
use Twilio\Rest\Client;

#[Layout('layouts.app')]
class Visitor extends Component
{
    use WithPagination;

    #[Url]
    public $search;
    

    public function toggle(ModelsVisitor $visitor)
    {
            $visitor = ModelsVisitor::find($visitor->id);

            $visitor->check_out_time = Carbon::now()->format('H:i');
            $visitor->save();
            
        
    }

 
    public function delete(ModelsVisitor $visitor)
    {
        $visitor = ModelsVisitor::find($visitor->id);
        if($visitor){
            $visitor->delete();
        }
    }
    public function sendsms()
    {

    $sid    = getenv("TWILIO_SID");
    $token  = getenv("TWILIO_TOKEN");
    $sender_number = getenv('TWILIO_NUMBER');

    if(!$sid||!$token||$sender_number){
        session('error','Some Credetials are missing in the .env file!');
    }


        $twilio = new Client($sid, $token);
        $message = $twilio->messages
          ->create("+254 792 590501", // to
            array(
                      "body" => "Your Message",
                      "from" => $sender_number
            )
          );
          dd("sent");


    }

    public function render()
    {
        $visitors = ModelsVisitor::latest()
        ->where('name','like',"%{$this->search}%")
        ->orWhere('email','like',"%{$this->search}%")
        ->orWhere('phone_number','like',"%{$this->search}%")
        ->orWhere('company','like',"%{$this->search}%")
        ->paginate('10');

        return view('livewire.visitor',
    [
        'visitors' => $visitors
    ]);
    }
}
