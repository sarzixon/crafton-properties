<div class="py-[46px] bg-bg-alt rounded-[14px] p-8">
    <h4 class="mb-10">Zostaw nam wiadomość</h4>
    <form action="/kontakt" method="POST" class="flex flex-col gap-5">
        <div class="grid grid-cols-10 gap-5">
            @include('_components.input', [
                'type' => 'email',
                'name' => 'email',
                'label' => 'adres e-mail',
                'placeholder' => 'Twój adres E-mail',
                'required' => true,
                'autocomplete' => 'email',
                'attributes' => 'col-span-12 lg:col-span-3'
            ])
            @include('_components.input', [
                'type' => 'text',
                'name' => 'name',
                'label' => 'Imię i nazwisko',
                'placeholder' => 'Twoje imię i nazwisko',
                'required' => true,
                'autocomplete' => 'name',
                'attributes' => 'col-span-12 lg:col-span-3'
            ])
@include('_components.input', [
    'type' => 'text',
    'name' => 'subject',
    'label' => 'Temat rozmowy',
    'placeholder' => 'O czym chcesz porozmawiać?',
    'autocomplete' => 'off',
    'attributes' => 'col-span-12 lg:col-span-4'
])
        </div>

        <div class="flex flex-col gap-[10px]">
            <label for="message" class="uppercase">Wiadomość</label>
            <textarea id="message" name="message" placeholder="Napisz swoją wiadomość..." rows="6" required class="border border-stroke rounded-lg p-3 placeholder:text-text"></textarea>
        </div>

        <div class="flex gap-[14px] leading-[1.8] mb-[42px]">
            <input type="checkbox" id="consent" name="consent" class="appearance-none rounded-full w-2 h-2 before:content-[''] before:block before:rounded-full before:border before:border-primary before:w-5 before:h-5 checked:bg-primary grid place-content-center mt-3 ml-2" required>
            <label for="consent" class="text-xs text-text">
                Wyrażam zgodę na przetwarzanie moich danych osobowych w postaci imienia, nazwiska, adresu e-mail i nr tel. (jeżeli został podany), podanych w powyższym formularzu, zgodnie z przepisami rozporządzenia Parlamentu Europejskiego i Rady (UE) 2016/679 z dnia 27 kwietnia 2016 r. w sprawie ochrony osób fizycznych w związku z przetwarzaniem danych osobowych i w sprawie swobodnego przepływu takich danych oraz uchylenia dyrektywy 95/46/WE (ogólne rozporządzenie o ochronie danych), Dz. Urz. UE z 4.5.2016 r. L 119, str. 1), w celu udzielenia odpowiedzi na złożone zapytanie. Żądanie usunięcia danych proszę kierować na adres biuro@realestate.com
                <br />
                <br />
                Informujemy, że: 1. Administratorem Pani/Pana danych osobowych jest RealEstate sp. z o.o. z siedzibą w Poznaniu przy ul. Długiej 5 lok. 25, 01-200 Poznań (KRS nr 0001000000) (dalej „Administrator”) e-mail: biuro@realestate.com
            </label>
            
        </div>

            @include('_components.button', [
                'slot' => 'Wyślij wiadomość',
                'variant' => 'primary',
                'type' => 'submit',
                'href' => '/post'
            ])
    </form>
</div>