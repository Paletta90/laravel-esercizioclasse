@extends('layouts.app')

@section('content')
<form action="{{ route('admin.posts.update', $post->id) }}" method="POST" class="w-25 m-auto"> 
    @method('PUT')
    @csrf 

    <div class="form-group">
        <label for="title"> Titolo </label> 
        <input type="text" class="form-control" id="title" placeholder="Titolo del post" name="title" value="{{ old('title', $post->title) }}">
    </div> 

    <div class="form-group">
        <label for="category">Category</label> 
        <select name="category_id" id="category">
            <option value="">Nessuna categoria</option>
            @foreach ($categories as $category)
                <option
                @if ( old('category_id', $post->category_id) == $category->id )
                    selected
                @endif
                value="{{ $category->id }}">
                {{ $category->label }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="content"> Content </label> 
        <textarea id="content" name="content" cols="30" rows="10" placeholder="Scrivi contenuto del post">
            {{ old('content', $post->content) }}
        </textarea>
    </div> 

    <div class="form-group">
        <label for="image">Image</label>
        <input type="url" class="form-control" id="image" placeholder="url dell'immagine" name="image" value="{{ old('image', $post->image) }}">
    </div> 

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Crea</button>
    </div> 

</form> 
@endsection