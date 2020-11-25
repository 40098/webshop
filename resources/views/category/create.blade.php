@extends('layouts.app')

@section('content')

    @if($errors->any())
    @foreach ($errors->all() as $error)
        {{$error}} <br>
    @endforeach
    @endif
    <form name="new" method="POST" action="/categories">
    @csrf
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Categorie Toevoegen</h5>
            <div class="form-group">
                <hr>
                <label for="title">Naam</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="" require>
            </div>
                <div class="form-group float-right">
                <a href="/categories" role="button" class="btn btn-outline-secondary">Terug</a>
                <input type="submit" class="btn btn-outline-primary" value="Toevoegen">
            </div>
        </div>
    </div>




        
    </form>
@endsection