@extends('_layouts.master')
@section('body')
<div class="page">
  <h1 class="page-title">{{ $page->title }}</h1>
  @yield('content')
</div>
@endsection