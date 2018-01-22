@extends ('layout')

@section ('content')
<h1>Create a post</h1>

<hr>

<form method="POST" action="/posts">

    {{ csrf_field() }}

    <div class="form-group">
        <label for="title">Title</label>
        <input class="form-control"
                type="text"
                name="title"
                id="title"
        >
    </div>

    <div class="form-group">
        <label for="body">Body</label>
        <textarea class="form-control"
                    name="body"
                    id="body"
        ></textarea>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Create</button>
    </div>

</form>
@endsection

