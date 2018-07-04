@extends('layout.masterpage')

@section('body')
    <div class="container">
        <div class="row">
            @if(isset($dbQuerry))
                @foreach ($dbQuerry as $object)
                    <div class="col-10">

                        <h2>{{ $object->titel }}</h2>
                        <p>{{ $object->content }}</p>
                        <hr>
                        <p>gemaakt op: {{$object->created_at}}</p>
                        <p>bewerkt op: {{$object->updated_at}}</p>

                    </div>
                    <div class="col-2">
                        <a href="/{{ $object->id }}">
                            <button class="btn btn-success">show</button>
                        </a>
                        <form action="/{{ $object->id }}/edit" method="GET">
                            {{method_field('EDIT')}}
                            {{csrf_field()}}
                            <input type="submit" class="btn btn-warning" value="Edit"/>
                        </form>
                        <form action="/{{$object->id}}" method="POST">
                            {{method_field('DELETE')}}
                            {{csrf_field()}}
                            <input type="submit" class="btn btn-danger" value="Delete"/>
                        </form>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection