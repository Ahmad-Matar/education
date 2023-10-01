@extends('layout.index')

@section('content')
    <x-error-mesaage ></x-error-mesaage>
    <h1>create user</h1>
    <form action="{{route('post.store')}}" method="post">
        @csrf

        <x-input class="invalid" lablesmall="name" label="Name" id="name" name="name" />
        

        <x-input lablesmall="description" label="description" id="description" name="description" type="text"/>




        <button type="submit" class="btn btn-primary">save</button>
    </form>
@endsection