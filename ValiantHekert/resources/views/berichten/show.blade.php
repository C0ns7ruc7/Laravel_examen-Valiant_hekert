@extends('layout.masterpage')

@section('body')
    @if(isset($dbQuery))
        <div class="col-12">
            <h2>{{ $dbQuery->titel }}</h2>
            <p>{{ $dbQuery->content }}</p>
            <hr>
            <p>gemaakt op: {{$dbQuery->created_at}}</p>
            <p>bewerkt op: {{$dbQuery->updated_at}}</p>
        </div>
    @endif
@endsection