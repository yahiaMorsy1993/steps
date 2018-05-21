@extends('layouts.app')

@section('content')
<div class="container">
<table class="table table-hover" id="example" style="width:100%" name="example">
  <thead>
<tr>
    <th>Name</th>
    <th>Position</th>
    <th>Office</th>
    <th>Age</th>
    <th>Salary</th>
</tr>
</thead>
<tbody>
    @foreach($views as $view)
<tr>
    <td> {{$view->name}}</td>
    <td>{{$view->position}}</td>
    <td>{{$view->office}}</td>
    <td>{{$view->age}}</td>
    <td>{{$view->salary}}</td>

</tr>
@endforeach

</tbody>

<tfoot>
<tr>
    <th class="sorting_asc" >Name</th>
    <th>Position</th>
    <th>Office</th>
    <th>Age</th>
    <th>Salary</th>
</tr>

</tfoot>
</div>

</table>

@if($views->hasPages())

<div align="center">
  {{ $views->links('vendor.pagination.custom') }}
</div>

@endif

<form class="navbar-form" role="search" method="GET" action="{{url("/search")}}">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" name="name">
            <div class="input-group-btn">
                <button class="btn btn-warning" type="submit">Search Records</button>
            </div>
        </div>
</form>
<label class="badge badge-secondary">number of records here : {{ $views->count() }} </label>
<label class="badge badge-secondary">Total records : {{$views->total()}} </label>




@endsection
