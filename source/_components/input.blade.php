@php
    $type = $type ?? 'text';
    $name = $name ?? 'input';
    $label = $label ?? 'field label';
    $placeholder = $placeholder ?? 'type smth...';
    $required = $required ?? false;
    $autocomplete = $autocomplete ?? "on";
    $attributes = $attributes ?? '';
@endphp
<div class="flex flex-col gap-[10px] {{ $attributes }}">
    <label for="email" class="uppercase text-base">{{ $label }}</label>
    <input type="{{ $type }}" id="{{ $name }}" name="{{ $name }}" placeholder="{{ $placeholder }}"
        class="border border-stroke rounded-lg placeholder:ml-3 placeholder:text-text" style="padding: 12px"
        autocomplete="{{ $autocomplete }}" {{ $required ? 'required' : '' }}>
</div>