@extends('layouts.app')

@section('content')
<div class="container">
<table class="table table-hover" id="example" style="width:100%">
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

{{ $views->links() }}
<strong>number of records here </strong> : {{ $views->count() }}
<strong> Current Page : </strong>{{$views->currentPage() }}
<strong> Firist Item : </strong>{{$views->firstItem() }}
<button class="btn btn-danger" href="{{$views->lastPage() }}">last page</button>
<strong> Firist Item : </strong>{{$views->lastPage() }}
@endsection
