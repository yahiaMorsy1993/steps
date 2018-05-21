@extends('layouts.app')

@section('content')
<h2><label class="badge badge-dark col-md-12"> Search Results</label> </h2>
<div class="container">
<div class="row">

@if(count($results)>0)
@foreach($results as $result)
{{ $result->name }}
{{ $result->position }}
{{ $result->salary }}
{{ $result->age }}
@endforeach
@else
<h2><label class="badge badge-dark col-md-12"> No Results</label> </h2>

@endif

</div>
</div>
@endsection
