@extends('layout.index')

@section('content')
    <h1 class="mb-3">{{$title}}</h1>
    <a class="btn btn-primary" href="/product/create" role="button">create</a>
    <table class="table">
        <thead>
            <th>name</th>
            <th>price</th>
            <th>description</th>
            <th>created_at</th>
            <th>action</th>

        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td><a href="{{ url('/users/show/'.$product->id)}}">{{$product->name}} </a></td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->description}}</td>
                      <td>{{$product->created_at}}</td>
                    <td>
                     <a class="btn btn-warning" href="{{ url('/users/'.$product->id.'/edit') }}" role="button">edit</a>
                    <form action="/users" method="post">
                        @csrf
                        @method('delete')
                        <input type="hidden" name="id" value="{{$product->id}}">

                        <button class="btn btn-danger" type="submit">delete</button>
                    </form>


                    </td>

                </tr>

            @endforeach

        </tbody>
    </table>
    @endsection
