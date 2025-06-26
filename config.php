<?php

use Illuminate\Support\Str;

return [
    'baseUrl' => '',
    'production' => false,
    'siteName' => 'Crafton Properties',
    'siteDescription' => 'Znajdź z nami najlepszą nieruchomość',
    'siteAuthor' => 'Michał Sarzała',


    'isActive' => function ($page, $path) {
        return Str::endsWith(trimPath($page->getPath()), trimPath($path));
    },
];
