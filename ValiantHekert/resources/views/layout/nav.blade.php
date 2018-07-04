<p style="padding: 1%;"><a href="/">start pagina</a></p>
<p style="padding: 1%;"><a href="{{route('berichten.index')}}">berichten</a></p>
<p style="padding: 1%;"><a href="{{route('gebruikers.index')}}">gebruikers</a></p>
@auth
    <p style="padding: 1%;"><a href="{{ url('/home') }}">Home</a></p>
@else
    <p style="padding: 1%;"><a href="{{ route('login') }}">Login</a></p>
    <p style="padding: 1%;"><a href="{{ route('register') }}">Register</a></p>
@endauth