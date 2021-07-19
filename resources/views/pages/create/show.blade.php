@extends('layout.indexBack')
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
        @foreach ($creates as $create)
            <tr class="{{ strlen($create->name) >= 5 ? 'bg-primary' : '' }}">
                <th scope="row">{{ $create->id }}</th>
                <td>{{ $create->name }}</td>
                <td>{{ $create->quantity }}</td>
                <td><a href="{{url()->previous()}}" class="btn btn-info">BACK</a></td>
            </tr> 
        @endforeach
    </tbody>
</table>
@endsection