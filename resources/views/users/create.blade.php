@extends('layout.index')

@section('content')
    <x-error-mesaage ></x-error-mesaage>
    <h1>create user</h1>
    <form action="/users" method="post">
        @csrf

        <x-input class="invalid" lablesmall="username" label="Name" id="username" name="username" />
        

        <x-input lablesmall="email" label="Email" id="email" name="email" type="email"/>


        <x-input lablesmall="password" label="password" id="password" name="password" type="password"/>

        <x-input lablesmall="confirm_password" label="password" id="confirm_password" name="confirm_password" type="password"/>



        <button type="submit" class="btn btn-primary">save</button>
    </form>
@endsection