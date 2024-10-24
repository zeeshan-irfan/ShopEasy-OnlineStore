<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class customerReview extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $userName ="",
        public int $userRating = 0,
        public array $reviewImages=[],
        public string $userReview="",
        public string $sellerResponce=""
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.customer-review');
    }
}
