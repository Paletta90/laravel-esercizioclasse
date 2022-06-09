@extends('layouts.app') 
@section('content') 
<form action="{{ route('admin.categories.store') }}" method="POST" class="w-25 m-auto" novalidate> 
    @csrf 

    <div class="form-group">
        <label for="label"> Label </label> 
        <input type="text" class="form-control" id="label" placeholder="Nome della label" name="label">
    </div> 

    <div class="form-group">
        <label for="color">Color</label>
        <input type="url" class="form-control" id="color" placeholder="Colore della label" name="color">
    </div> 

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Crea</button>
    </div> 

</form> 
@endsection
