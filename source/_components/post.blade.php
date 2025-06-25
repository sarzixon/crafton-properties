@php
    $imgUrl = $imgUrl ?? '';
    $title = $title ?? 'Post Title';
    $postUrl = $postUrl ?? '';
@endphp
<!-- Jak kupić nieruchomość <br /> i nie zwariować? Przewodnik dla początkujących. -->
<div class="border border-stroke rounded-xl max-w-[400px] p-6">
    <img class="" src="{{ $imgUrl }}" alt="nieruchomość">
    <h3 class="text-[1.125rem] my-5">{!! $title !!}</h3>
    @include('_components.button', [
        'slot' => 'Przejdź do artykułu',
        'variant' => 'secondary',
        'type' => 'link',
        'href' => $postUrl,
        'attributes' => 'mt-8'
    ])
</div>