<a href="{{ $link }}">
    <button class="btn me-2 {{ $severity }}" type="button">
        @if ($icon) <i class="{{ $icon }}"></i> @endif
        <span>{{ $label }}</span>
    </button>
</a>
