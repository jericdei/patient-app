<?php

namespace App\View\Components;

use Closure;
use Illuminate\Support\Str;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class InputText extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $name,
        public mixed $value = null,
        public bool $hasError = false,
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input-text', mergeData: [
            'placeholder' => Str::title(str_replace('_', ' ', $this->name)),
        ]);
    }
}
