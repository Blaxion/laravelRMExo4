@extends((url()->previous()=='http://127.0.0.1:8000/setfruits'OR url()->previous()=='http://127.0.0.1:8000/setvegetables')?'layout.indexBack':'layout.index')
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
            <tr class="{{ strlen($show->name) >= 5 ? 'bg-primary' : '' }}">
                <th scope="row">{{ $show->id }}</th>
                <td>{{ $show->name }}</td>
                <td>{{ $show->quantity }}</td>
                <td><a href="{{url()->previous()}}" class="btn btn-info">BACK</a></td>
            </tr> 
    </tbody>
</table>
@endsection