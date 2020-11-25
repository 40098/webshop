@extends('layouts.app')

@section('content')

    @if(Session::has('message'))
        <p class="alert alert-info">{{ Session::get('message') }}</p>
    @endif

    <a href="/categories/create" role="button" class="btn btn-outline-primary">Toevoegen</a><br/>
    <table class="table">
    <thead>
        <tr>
            <th scope="col">Naam</th>
            <th scope="col">Producten</th>
        </tr>
    </thead>
    <tbody>

    @foreach($categories as $category)
        <br>
        <tr>
            <td>{{$category->name}}</td>
        @foreach($category->products as $product)
            <td>{{$product->title}}</td>
        @endforeach
        </tr>
    @endforeach
        </tbody>
    </table>
@endsection