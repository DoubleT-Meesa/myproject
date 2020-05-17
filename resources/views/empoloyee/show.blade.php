@extends('layouts.app')

@section('content')
<h1>Empoloyee #{{ $emps->id }}</h1>
<table class="table table-sm" style="width:50%">
    <tbody>
        <tr><th> ID </th><td>{{ $emps->id }}</td></tr>
        <tr><th> Name  </th><td> {{ $emps->name }} </td></tr>
        <tr><th> Age   </th><td> {{ $emps->age }} </td></tr>
        <tr><th> Salary   </th><td> {{ $emps->salary }} </td></tr>
        <tr><th> Phone   </th><td> {{ $emps->phone }} </td></tr>
        
    </tbody>
</table>
@endsection
