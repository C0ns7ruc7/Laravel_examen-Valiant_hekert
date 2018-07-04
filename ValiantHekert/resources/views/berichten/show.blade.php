@extends('layout.masterpage')

@section('body')
    @if(isset($dbQuery))
        <div class="col-12">
            <h2>{{ $object->titel }}</h2>
            <p>{{ $object->content }}</p>
            <hr>
            <p>gemaakt op: {{$object->created_at}}</p>
            <p>bewerkt op: {{$object->updated_at}}</p>
        </div>
    @endif
@endsection