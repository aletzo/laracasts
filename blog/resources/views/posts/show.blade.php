@extends ('layout')

@section ('content')
<h1>{{$post->title}}</h1>

@if (count($post->tags))
<ul>
    @foreach ($post->tags as $tag)
    <li class="list-inline">
        <a href="/posts/tag/{{$tag->name}}">
            {{$tag->name}}
        </a>
    </li>
    @endforeach
</ul>
@endif


<small title="{{$post->created_at}}">
    {{$post->created_at->toFormattedDateString()}} by {{$post->user->name}}
</small>
<p>{{$post->body}}</p>

@if (count($post->comments))
<hr>

<ul class="list-group">
    @foreach ($post->comments()->oldest()->get() as $comment)
    <li class="list-group-item">
        {{$comment->body}}
        <small title="{{$comment->created_at}}">
            {{$comment->user->name}} on {{$comment->created_at->diffForHumans()}}
        </small>
    </li>
    @endforeach
</ul>
@endif

@auth
<hr>

<div class="card" style="width:100%">
    <div class="card-body">
        <form action="/posts/{{$post->id}}/comments" method="POST">
        
            {{ csrf_field() }}

            <div class="form-group">
                <textarea class="form-control"
                            name="body"
                            placeholder="{{count($post->comments) ? '' : 'be the first to '}}say something"
                            rows="3"
                ></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">
                    Add comment
                </button>
            </div>
        </form>
    </div>
</div>
@endauth
@endsection

