@extends('layouts.app')

@section('content')

    @if(Session::has('message'))
        <p class="alert alert-info">{{ Session::get('message') }}</p>
    @endif

    <a href="/products/create" role="button" class="btn btn-outline-primary">Toevoegen</a><br/>
    <table class="table">
    <thead>
        <tr>
            <th scope="col">Titel</th>
            <th scope="col">Beschrijving</th>
            <th scope="col">Prijs</th>
            <th scope="col">Catogorie</th>
            <th scope="col">Auteur</th>
        </tr>
    </thead>
    <tbody>

    @foreach($products as $product)
        <br>
        <tr>
            <td>{{$product->title}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->category->name}}</td>
            <td>{{$product->user->name}}</td>
        </tr>

    @endforeach
        </tbody>
    </table>
@endsection