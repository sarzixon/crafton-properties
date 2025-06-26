@php
    $type = $type ?? 'button';
    $variant = $variant ?? 'primary';
    $primaryClass = 'inline-flex items-center bg-primary rounded-full py-[1.125rem] px-8 font-display uppercase font-medium leading-none text-white';
    $classes = match ($variant) {
        'primary' => $primaryClass,
        'secondary' => 'inline-flex bg-surface-light border border-stroke rounded-full py-[1.125rem] px-8 font-display uppercase font-medium leading-none text-text',
        default => $primaryClass,
    };
    $href = $href ?? '/';
@endphp

@if ($type == 'link')
    <a class="{{ $classes }} {{ $attributes ?? '' }}" href="{{ $href }}" style="width: fit-content">
        <span class="text-nowrap">{{ $slot ?? 'Click me' }}</span>
        @if ($variant == 'primary')
            <img class="ml-[10px]" src="/assets/img/forward.svg" alt="arrow">
        @endif
    </a>
@else
    <button type="{{ $type }}" class="{{ $classes }} {{ $attributes ?? '' }}" style="width: fit-content">
        {{ $slot ?? 'Click me' }}
        @if ($variant == 'primary')
            <img class="ml-[10px]" src="/assets/img/forward.svg" alt="arrow">
        @endif
    </button>
@endif