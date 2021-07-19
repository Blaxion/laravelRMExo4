@extends('layout.indexBack')
@section('main')
    <div class="container w-25">
        <p class='display-4 text-center'> Create entry for {{(url()->previous()=='http://127.0.0.1:8000/setfruits')?'fruits':'vegetables'}}</p>
        <form action="{{(url()->previous()=='http://127.0.0.1:8000/setfruits')?'/fruits':'/vegetables'}}" method='POST'>
            @csrf
            <div class="form-group" >
                <label for="exampleInputEmail1">Email address</label>
                <input type="text" class="form-control" name='name' id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter email">
            </div>
            <div class="form-group" >
                <label for="exampleInputEmail1">Email address</label>
                <input type="number" class="form-control" name='quantity' id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter email">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{url()->previous()}}" class="btn btn-info">BACK</a>
        </form>
    </div>
@endsection