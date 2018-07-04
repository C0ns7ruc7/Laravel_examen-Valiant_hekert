@extends('layout.masterpage')

@section('body')
    @if(isset($dbQuery))
        <div class="col-12">
            h2>{{ $object->gebruiker }}</h2>
            <p>{{ $object->email }}</p>
            <p>gebruiker sinds: {{$object->created_at}}</p>
        </div>
    @endif
@endsection