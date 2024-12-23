<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\CallLog;
use App\Models\Visitor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public $per1star,$per2star,$per3star,$per4star,$per5star;
    public function index()
    {
        if(Auth::user()->usertype == 'admin'){
            $reviews = Review::all()->count();
    
            if($reviews>0){
                $reviews5star = Review::where('rating',5)->count();
                $reviews4star = Review::where('rating',4)->count();
                $reviews3star = Review::where('rating',3)->count();
                $reviews2star = Review::where('rating',2)->count();
                $reviews1star = Review::where('rating',1)->count();
    
                $this->per5star = ($reviews5star/$reviews) * 100;
                $this->per4star = ($reviews4star/$reviews) * 100;
                $this->per3star = ($reviews3star/$reviews) * 100;
                $this->per2star = ($reviews2star/$reviews) * 100;
                $this->per1star = ($reviews1star/$reviews) * 100;
            }
            return view('admin-dashboard',[

                'reviews' => $reviews,
                'per1star' => $this->per1star,
                'per2star' => $this->per2star,
                'per3star' => $this->per3star,
                'per4star' => $this->per4star,
                'per5star' => $this->per5star
            ]);
        }else{

        $call = CallLog::latest()->first();
        $callstoday =CallLog::whereDate('created_at', Carbon::today())->get();
        $callsweek = CallLog::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();
        $visitor = Visitor::latest()->first();
        $visitors = Visitor::latest()->take(3)->get();
        $reviews = Review::all()->count();


        return view('dashboard',[
            'callsweek' => $callsweek,
            'visitors' => $visitors,
            'callstoday' => $callstoday,
            'call' => $call,
            'visitor' => $visitor,
            'reviews' => $reviews,
            'per1star' => $this->per1star,
            'per2star' => $this->per2star,
            'per3star' => $this->per3star,
            'per4star' => $this->per4star,
            'per5star' => $this->per5star
        ]);
        }

        


        }

    }

