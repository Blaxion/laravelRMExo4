@extends('layout.indexback')
@section('main')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Quantity</th>
                <th scope="col">Utilities</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($fruits as $fruit)
                <tr class="{{ strlen($fruit->name) >= 5 ? 'bg-primary' : '' }}">
                    <th scope="row">{{ $fruit->id }}</th>
                    <td>{{ $fruit->name }}</td>
                    <td>{{ $fruit->quantity }}</td>
                    <td>
                        <a href="fruits/{{$fruit->id}}" class="btn btn-info">SHOW</a>
                        
                        <form action="/fruits/{{$fruit->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type='submit'class="btn btn-danger">DELETE</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="fruits/create" class="btn btn-info text-white">CREATE</a>
@endsection
