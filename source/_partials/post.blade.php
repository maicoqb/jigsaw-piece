<div class="post">
    <h1 class="post-title">
        <a href="{{ $post->getUrl() }}">
            {{ $post->title }}
        </a>
    </h1>

    <span class="post-date">{{$post->date_formated()}}</span>

    {!! $post->getContent() !!}
</div>