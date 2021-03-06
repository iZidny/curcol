<nav class="top-nav">
  <div>
  <h1 class="brand"><a href="{{ route('timeline') }}">Curcol</a></h1>
  <ul class="list-nav">
    <li class="user-fullname">
      @if(Session::has(User::$sessionField['fullname']))
      <a href="{{ route('profile', Session::get(User::$sessionField['username']))}}">
        {{ Session::get(User::$sessionField['fullname']) }}
      </a>
      @endif
    </li>
    <li class="logout">
      <a href="{{ route('logout') }}">logout</a>
    </li>
  </ul>
  <div class="form-search">
  {{ Form::open(array('url' => 'search', 'method' => 'GET')) }}
  {{ Form::text('query', Input::old('query'), array('placeholder' => 'Pencarian')) }}
  {{ Form::close() }}
  </div>
  </div>
</nav>