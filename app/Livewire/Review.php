<?php

namespace App\Livewire;

use App\Models\Review as ModelsReview;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('layouts.app')]
class Review extends Component
{
    use WithPagination;
    public $search;
    public $reviewer;

    public function render()
    {
        $reviews = ModelsReview::with('user')
        ->whereHas('user', function($query){
            $query->where('name','like',"%$this->search%");
        })->paginate(5);
        
        if($reviews){
            foreach($reviews as $review){
                $this->reviewer = $review->user;
            }
        }
        
        return view('livewire.reviews.review',[
            'reviews' => $reviews,
            'reviewer' => $this->reviewer
        ]);
    }
} 
