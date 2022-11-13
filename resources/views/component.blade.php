@component('partials.modal')
    @slot('title')
        Password validation failure
    @endslot

    <p>The password you have provided is not valid.
    Here are the rules for valid passwords: [...]</p>

    <p><a href="#">...</a></p>
@endcomponent
