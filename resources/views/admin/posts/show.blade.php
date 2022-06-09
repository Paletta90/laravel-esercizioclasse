@extends('layouts.app')

@section('content')

<div class="container">
    <img src="{{ $post->image }}" alt="">
    <h2>{{ $post->title }}</h2>
    <h6>{{ $post->content }}</h6>
    <h6>
        @if ($post->Category)
        <span class="badge badge-pill badge-{{ $post->Category->color }}">{{ $post->Category->label}}</span>
        @endif
    </h6>
    @include('includes.deletePost')
</div>

@endsection

@section('scripts')
<script src="{{ asset('js/delete-form.js') }}"></script>
@endsection
