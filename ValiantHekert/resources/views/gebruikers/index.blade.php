@extends('layout.masterpage')

@section('body')
    @auth
        <p class="col-12"><a href="{{route('gebruikers.create')}}">gebruiker aanmaaken</a></p>
    @endauth
    @if(isset($dbQuery))
        @foreach ($dbQuery as $object)
            <div class="col-10">
                <h2>{{ $object->gebruiker }}</h2>
                <p>{{ $object->email }}</p>
                <hr>
                <p>gebruiker sinds: {{$object->created_at}}</p>
            </div>
            <div class="col-2">
                <a href="gebruikers/{{ $object->id }}">
                    <button class="btn btn-success">show</button>
                </a>
                @auth
                    <form action="gebruikers/{{ $object->id }}/edit" method="GET">
                        {{method_field('EDIT')}}
                        {{csrf_field()}}
                        <input type="submit" class="btn btn-warning" value="Edit"/>
                    </form>
                    <form action="gebruikers/{{$object->id}}" method="POST">
                        {{method_field('DELETE')}}
                        {{csrf_field()}}
                        <input type="submit" class="btn btn-danger" value="Delete"/>
                    </form>
                @endauth
            </div>
        @endforeach
    @endif

@endsection