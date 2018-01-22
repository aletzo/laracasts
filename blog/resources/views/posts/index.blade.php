@extends ('layout')

@section ('content')
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">My Blog of yeah</h1>
        <p class="lead text-muted">blah blah yeah</p>
    </div>
</section>

<div class="album">
    <div class="container">

        <div class="row">
            @foreach ($posts as $post)
                @include ('posts.post')
            @endforeach
        </div>

        @auth
        <div class="row">
            <div class="col-md-12">
                <a href="/posts/create"
                class="btn btn-primary float-right"
                >Create post</a>
            </div>
        </div>
        @endauth

    </div>
</div>
@endsection

