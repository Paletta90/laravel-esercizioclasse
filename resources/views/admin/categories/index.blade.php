@extends('layouts.app')

<div class="container">
@section('content')
    
    @if (session('message'))
    <div class="alert alert-danger">
        {{ session('message') }}
    </div>
    @endif

    <a href="{{ route('admin.categories.create') }}" class="btn btn-success">New category</a>

    <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">Label</th>
                <th scope="col">Color</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>

            @forelse ($categories as $category)

            <tr>
                <td>
                    {{ $category->label }}
                </td>

                <td>
                    <p>
                        {{ $category->color }}
                    </p>
                </td>

                <td class="d-flex">

                    <a href="{{ route('admin.categories.show', $category->id) }}" class="btn btn-primary mr-2">View</a>

                    <a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-success mr-2">Edit</a>

                    @include('includes.deleteCategory')
                </td>

            </tr>

            @empty

            <h2>Non ci sono post</h2>

            @endforelse

        </tbody>
    </table>

    {{-- @if ( $posts -> hasPages() )
        {{ $posts -> links() }}
    @endif --}}

</div>
@endsection

@section('scripts')
    <script src="{{ asset('js/delete-form.js') }}"></script>
@endsection
