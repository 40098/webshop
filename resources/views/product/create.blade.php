@extends('layouts.app')

@section('content')

    @if($errors->any())
    @foreach ($errors->all() as $error)
        {{$error}} <br>
    @endforeach
    @endif
    <form name="new" method="POST" action="/products">
    @csrf
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Product Toevoegen</h5>
            <input type="hidden" name="user_id" id="user_id" value="{{ Auth::user()->id }}">
            <div class="form-group">
                <hr>
                <label for="title">Titel</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="description">Beschrijving</label>
                <input type="text" name="description" id="description" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="price">Prijs</label>
                <input type="number" name="price" id="price" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="category">Categorie</label>
                <select name="category_id" class="form-control">
                    @foreach($categories as $category)
                        <option value="{{ $category->id}}">{{ $category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group float-right">
                <a href="/products" role="button" class="btn btn-outline-secondary">Terug</a>
                <input type="submit" class="btn btn-outline-primary" value="Toevoegen">
            </div>
        </div>
    </div>




        
    </form>
@endsection