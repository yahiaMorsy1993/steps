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
    <th>Name</th>
    <th>Position</th>
    <th>Office</th>
    <th>Age</th>
    <th>Salary</th>
</tr>

</tfoot>
</div>

<nav class="navbar navbar-light bg-light">
      {{ csrf_field() }}
      <div class="input-group" >
          <input type="search" class="form-control" name="q"
              placeholder="Search users"> <span class="input-group-btn">
          </span>
      </div>
</nav>

</table>

@if($views->hasPages())

<div align="center">
  {{ $views->links('vendor.pagination.custom') }}
</div>

@endif

<label class="badge badge-secondary">number of records here : {{ $views->count() }} </label>
<label class="badge badge-secondary">Total records : {{$views->total()}} </label>

<script>
$(document).ready(function() {
    $('#example').DataTable( {
        "pagingType": "full_numbers",
        "search" : "true"
    } );
} );
</script>


@endsection
