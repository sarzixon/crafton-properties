<nav class="hidden lg:flex items-center justify-end text-lg">
    <ul class="flex gap-x-7 list-none font-display uppercase font-medium leading-none text-[15px]">
        <li>
            <a title="{{ $page->siteName }}" href="/"
                class="text-gray-700 hover:text-blue-600 {{ $page->isActive('/blog') ? 'active text-blue-600' : '' }}">
                Home
            </a>
        </li>
        <li>
            <a title="{{ $page->siteName }} O nas" href="/o-nas"
                class="text-gray-700 hover:text-blue-600 {{ $page->isActive('/about') ? 'active text-blue-600' : '' }}">
                O Nas
            </a>
        </li>
        <li>
            <a title="{{ $page->siteName }} Nasze Inwestycje" href="/inwestycje"
                class="text-gray-700 hover:text-blue-600 {{ $page->isActive('/about') ? 'active text-blue-600' : '' }}">
                Nasze Inwestycje
            </a>
        </li>
        <li>
            <a title="{{ $page->siteName }} Poradnik" href="/poradnik"
                class="text-gray-700 hover:text-blue-600 {{ $page->isActive('/about') ? 'active text-blue-600' : '' }}">
                Wynajmij
            </a>
        </li>
    </ul>
</nav>