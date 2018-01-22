@cache ($card)
<article class="Card">
    <h2> {{$card->title}} </h2>

    <ul>
        @foreach ($card->notes as $note)
            @include ('cards/note')
        @endforeach
    </ul>
</article>
@endcache
    
