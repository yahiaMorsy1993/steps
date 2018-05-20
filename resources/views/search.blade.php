@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Sample User details</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $user)
            <tr>
                <td>{{$result->name}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
