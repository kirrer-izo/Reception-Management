<?php

namespace App\Livewire;

use App\Models\Review;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;

#[Layout('layouts.app')]
class EditReview extends Component
{
    #[Rule('required|max:5|integer')]
    public $newrating;

    #[Rule('nullable')]
    public $newreview;

    public $reviewID;

    public function mount(Review $review)
    {
        if(Gate::denies('update-review', $review)){
            return abort(403);
        }
        $this->reviewID = $review->id;
        $this->newrating = $review->rating;
        $this->newreview = $review->review;
    }

    public function edit()
    {

        $review = Review::findOrFail($this->reviewID);

        $review->rating = $this->newrating;
        $review->review = $this->newreview;
        $review->save();

    }
    public function render()
    {
        return view('livewire.reviews.edit-review');
    }
}
