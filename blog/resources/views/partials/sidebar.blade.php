<h3 id="archives-header" class="sidebar-header">Archives</h3>

<ul class="list-unstyled sidebar-list" id="archives-list">
    @foreach ($archives as $archive)
    <li>
        <a href="/posts?year={{$archive->year}}&month={{$archive->month}}">
            {{ "$archive->year $archive->month ($archive->count)" }}
        </a>
    </li>
    @endforeach
</ul>

<h3 id="tags-header" class="sidebar-header">Tags</h3>

<ul class="list-unstyled sidebar-list" id="tag-list">
    @foreach ($tags as $tag)
    <li>
        <a href="/posts/tag/{{$tag}}">
            {{$tag}}
        </a>
    </li>
    @endforeach
</ul>
