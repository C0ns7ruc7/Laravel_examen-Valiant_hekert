@extends('layout.masterpage')

@section('body')
    @auth
        <p class="col-12"><a href="{{route('berichten.create')}}">berichten aanmaaken</a></p>
    @endauth
    @if(isset($dbQuery))
        @foreach ($dbQuery as $object)
            <div class="col-10">

                <h2>{{ $object->titel }}</h2>
                <p>{{ $object->content }}</p>
                <hr>
                <p>gemaakt op: {{$object->created_at}}</p>
                <p>bewerkt op: {{$object->updated_at}}</p>

            </div>
            <div class="col-2">
                <a href="berichten/{{ $object->id }}">
                    <button class="btn btn-success">show</button>
                </a>
                @auth
                    <form action="berichten/{{ $object->id }}/edit" method="GET">
                        {{method_field('EDIT')}}
                        {{csrf_field()}}
                        <input type="submit" class="btn btn-warning" value="Edit"/>
                    </form>
                    <form action="berichten/{{$object->id}}" method="POST">
                        {{method_field('DELETE')}}
                        {{csrf_field()}}
                        <input type="submit" class="btn btn-danger" value="Delete"/>
                    </form>
                @endauth
            </div>
        @endforeach
    @endif

@endsection