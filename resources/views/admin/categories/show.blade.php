@extends('layouts.app')

@section('content')

<div class="container">
    <h2>{{ $category->label }}</h2>
    <h6 class="badge badge-pill badge-{{ $category->color }}">{{ $category->color }}</h6>
    {{-- <h6>
        @if ($post->Category)
        <span class="badge badge-pill badge-{{ $post->Category->color }}">{{ $post->Category->label}}</span>
        @endif
    </h6> --}}
    @include('includes.deleteCategory')
</div>

@endsection

@section('scripts')
<script src="{{ asset('js/delete-form.js') }}"></script>
@endsection
