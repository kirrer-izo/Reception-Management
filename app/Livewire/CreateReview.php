<?php

namespace App\Livewire;

use App\Models\Review;
use App\Models\Visitor;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;

#[Layout('layouts.app')]
class CreateReview extends Component
{
    use WithPagination;

    #[Rule('required|max:5|integer')]
    public $rating;

    #[Rule('nullable')]
    public $review;

    public $visitor_id;

    public function save(Review $review)
    {
        $this->validate();

        $user = Auth::user();

        $reviewable = null;

        if($this->visitor_id){
            $reviewable = Visitor::find($this->visitor_id);
        }else{
            $reviewable = $user;
        }

        $existingReview = Review::where('reviewable_type',get_class($reviewable))
        ->where('reviewable_id',$reviewable->id)
        ->first();

        if($existingReview){
            return redirect()->route('editreview',['review' => $existingReview->id])->with('success','Edit your review');
        }

        $review = new Review([
            'rating' => $this->rating,
            'review' => $this->review
        ]);

       $review->reviewable_type = get_class($reviewable);
       $review->reviewable_id = $reviewable->id;
       $review->save();

        session()->flash('success','Review Created!');
        $this->reset('rating','review');
    }


    public function render()
    {
        return view('livewire.reviews.create-review');
    }
}
