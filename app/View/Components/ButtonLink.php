<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ButtonLink extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $link,
        public string $label,
        public string $severity = 'primary',
        public ?string $icon = null,
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $this->severity = "btn-{$this->severity}";

        return view('components.button-link');
    }
}
