@extends('layout.index')

@section('content')

<h1 class="mb-3">post</h1>
    <a class="btn btn-primary" href="/users/create" role="button">create</a>
    <table class="table">
        <thead>
            <th>name</th>
            <th>description</th>
            <th>user</th>
            <th>created_at</th>
            <th>updated_at</th>

        </thead>
        <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->name}} </td>
                    <td>{{$post->description}}</td>
                    <td>{{$post->user->name}}</td>
                      <td>{{$post->created_at}}</td>
                      <td>{{$post->updated_at}}</td>



                </tr>

            @endforeach


        </tbody>

    </table>



@endsection