@extends ('layout')

@section ('content')
    <h1>Cards</h1>

    <div class="cards">
        @foreach ($cards as $card)
            @include ('cards/card')
        @endforeach
    </div>

@endsection
