<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class EventLogs extends Component
{
    public function __construct(public Collection $users)
    {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.event-logs');
    }
}
