---
pagination:
  collection: posts
---
@extends('_layouts.default')
@section('body')
    <div class="posts">
        @foreach ($pagination->items as $post)
            @include('_partials.post', compact($post))
        @endforeach
    </div>

    @include('_partials.pagination')
@endsection
