<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

</head>
<body>
<div class="container">
<x-error-mesaage />

<h1>update user</h1>
<form action="/users" method="post">
    @method('put')
    @csrf

        <x-input  value="{{$user->id}}"  id="id" name="id"  type="hidden"/>

       <x-input value="{{$user->name}}"  lablesmall="username" label="Name" id="username" name="username" />
        

        <x-input value="{{$user->email}}"  lablesmall="email" label="Email" id="email" name="email" type="email"/>


        <x-input value="{{$user->password}}"  lablesmall="password" label="password" id="password" name="password" type="password"/>

        <x-input lablesmall="confirm_password" label="password" id="confirm_password" name="confirm_password" type="password"/>



    <button type="submit" class="btn btn-primary">update</button>
</form>
</div>
</body>
</html>