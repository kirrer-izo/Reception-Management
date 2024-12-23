<?php

namespace App\Livewire;

use App\Models\Review;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Gate;

#[Layout('layouts.app')]
class ViewReview extends Component
{   
    public $review;

    public function mount(Review $review)
    {
        $this->review = Review::with('user')->findOrFail($review->id);
    }

    public function delete(Review $review)
    {
        $review = Review::findOrFail($review->id);
        $this->authorize('delete',$review);
        if($review){
            $review->delete();
            return redirect()->route('review')->with('delete','Deleted Successfully');
        }
    }
    public function render(Review $review)
    {
        
        return view('livewire.reviews.view-review',['review' => $this->review]);
    }
}
