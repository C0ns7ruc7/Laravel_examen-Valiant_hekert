@extends('layout.masterpage')

@section('body')
    @if(isset($dbQuery))
        <div class="col-12">
            <h2>{{ $dbQuery->gebruiker }}</h2>
            <p>{{ $dbQuery->email }}</p>
            <hr>
            <p>gebruiker sinds: {{$dbQuery->created_at}}</p>
        </div>
    @endif
@endsection