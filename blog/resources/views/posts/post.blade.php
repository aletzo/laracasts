<div class="card">
    <a href="/posts/{{$post->id}}">
        {{$post->title}}
    </a>
    <small title="{{$post->created_at}}">
        {{$post->created_at->diffForHumans()}} by {{$post->user->name}}
    </small>
    <p class="card-text">{{$post->body}}</p>
    <small class="float-right text-muted">
        {{$count = count($post->comments)}} comment{{$count > 1 ? 's' : ''}}
    </small>
</div>
