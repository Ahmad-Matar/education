@extends('layout.index')

@section('content')
    <x-error-mesaage ></x-error-mesaage>
    <h1>create product</h1>
    <form action="/product" method="post">
        @csrf

        <x-input class="invalid" lablesmall="name" label="Name" id="name" name="name" />
        

        <x-input lablesmall="price" label="Price" id="price" name="price" type="number"/>


        <x-input lablesmall="description" label="Description" id="description" name="description" type="text"/>




        <button type="submit" class="btn btn-primary">save</button>
    </form>
@endsection