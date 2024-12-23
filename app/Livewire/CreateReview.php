<?php

namespace App\Livewire;

use App\Models\Review;
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

    public function save(Review $review)
    {
        $this->validate();

        $user_id = Auth::user()->id;

        $existingReview = Review::where('user_id',$user_id)->first();

        if($existingReview){
            return redirect()->route('editreview',['review' => $existingReview->id])->with('success','Edit your review');
        }

        Review::create([
            'rating' => $this->rating,
            'review' => $this->review,
            'user_id' => $user_id
        ]);

        session()->flash('success','Review Created!');
        $this->reset('rating','review');
    }


    public function render()
    {
        return view('livewire.reviews.create-review');
    }
}
