@extends('layouts.app')

@section('content')

<h1>Empoloyee</h1>

<form action="{{ url('/empoloyee') }}" method="GET" class="my-4">
    <input name="search" id="search" value="{{ request('search') }}" />
    <button type="submit">Search</button>
</form>


<table class="table table-sm table-bordered text-left" style="width:50%">
    <tr>
        <th>#</th><th>Name</th> <th>Age</th> <th>salary</th> <th>Phone</th> <th>Action</th>
    </tr>
    @foreach($emp as $item)
    <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->name }}</td>
        <td>{{ $item->age }}</td>
        <td>{{ number_format($item->salary) }}</td>
        <td>{{ $item->phone }}</td>
        <td>
            <a href="{{ url('/empoloyee/'.$item->id ) }}" class="btn btn-sm btn-primary">View</a>
        </td>

    </tr>
    @endforeach
</table>


@endsection