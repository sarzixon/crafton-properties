@php
    $location = $location ?? 'Poznań 20-300';
    $title = $title ?? 'Poznań Park';
    $desc = $desc ?? "lorem ipsum dolor sit amet";
    $href = $href ?? "/";
@endphp
<div>
    <div class="flex items-center gap-[10px] mb-[10px]">
        <img src="/assets/img/icon-lokalizacja.svg" alt="lokalizacja">
        <span>{{ $location }}</span>
    </div>
    <div class="mb-[42px]">
        <h3>{{ $title }}</h3>
        <p>{{ $desc }}</p>
    </div>
    @include('_components.button', [
        'slot' => 'Poznaj szczegóły',
        'variant' => 'primary',
        'type' => 'link',
        'href' => $href
    ])
</div>