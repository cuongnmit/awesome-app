<div class="ui right vertical pointing menu sidebar">
    @auth
    <a class="item" href="{{ url('logout') }}">Logout</a>
    @else
    <a class="item" href="{{ route('login') }}">Login</a>
    @endauth
    <a class="item" href="{{ route('register') }}">Register</a>
    <a class="item" href="#">Contact us</a>
</div>
