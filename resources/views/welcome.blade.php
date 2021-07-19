@extends('layout.index')
@section('main')
<div class="container w-25">
    <form action="/adminAuth" method='POST'>
        @csrf
        <div class="form-group" >
            <label for="exampleInputEmail1">Email address</label>
            <input type="text" class="form-control" name='mail' id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter email">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
