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
        $reviews = ModelsReview::with('reviewable')
        ->whereHas('reviewable', function($query){
            $query->where('name','like',"%$this->search%");
        })->paginate(5);
        
        if($reviews){
            foreach($reviews as $review){
                $reviewable = $review->reviewable;
                $this->reviewer = $reviewable->name;
            }
        }
        
        return view('livewire.reviews.review',[
            'reviews' => $reviews,
            'reviewer' => $this->reviewer
        ]);
    }
} 
