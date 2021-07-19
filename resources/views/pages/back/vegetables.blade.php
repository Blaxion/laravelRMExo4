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
        @foreach ($vegetables as $vegetable)
            <tr class="{{ strlen($vegetable->name) >= 5 ? 'bg-primary' : '' }}">
                <th scope="row">{{ $vegetable->id }}</th>
                <td>{{ $vegetable->name }}</td>
                <td>{{ $vegetable->quantity }}</td>
                <td>
                    <a href="vegetables/{{$vegetable->id}}" class="btn btn-info">SHOW</a>
                    <form action="/vegetables/{{$vegetable->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">DELETE</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<a href="vegetables/create" class="btn btn-info text-white">CREATE</a>
@endsection