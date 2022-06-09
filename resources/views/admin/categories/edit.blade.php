@extends('layouts.app')

@section('content')
<form action="{{ route('admin.categories.update', $category->id) }}" method="POST" class="w-25 m-auto"> 
    @method('PUT')
    @csrf 

    <div class="form-group">
        <label for="label"> Label </label> 
        <input type="text" class="form-control" id="label" placeholder="Titolo del post" name="label" value="{{ old('label', $category->label) }}">
    </div> 

    <div class="form-group">
        <label for="color">Color</label>
        <input type="url" class="form-control" id="color" placeholder="url dell'immagine" name="color" value="{{ old('color', $category->color) }}">
    </div> 

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Crea</button>
    </div> 

</form> 
@endsection