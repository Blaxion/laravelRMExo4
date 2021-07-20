@extends('layout.index')
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
                        <a href="/fruits/{{$fruit->id}}" class="btn btn-info">SHOW</a>
                        
                    </td>
                </tr>
            @endforeach
            @if ($fruitscount==0)
                <p class="display-1 text-center">No more fruits</p>
            @endif
        </tbody>
    </table>
@endsection
