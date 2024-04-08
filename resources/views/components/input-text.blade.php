<input
    class="form-control {{ $hasError ? 'is-invalid' : '' }}"
    name="{{ $name }}"
    value="{{ $value ?: old($name) }}"
    placeholder="{{ $placeholder }}"
    {{ $attributes }}
/>

@error($name)
    <small class="text-danger form-text">{{ $message }}</small>
@enderror
