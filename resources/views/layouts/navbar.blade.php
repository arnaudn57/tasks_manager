<nav class="navbar navbar-light bg-light p-3">
  <a class="navbar-brand" href="/">
    <img src="{{URL::asset('/images/logo.png')}}" width="200" height="60" alt="">
  </a>
  <!-- Authentication Links -->
  <ul class="navbar-nav ms-auto flex-row gap-3">
    @guest
      @if (Route::has('login'))
        <li class="nav-item">
          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
      @endif

      @if (Route::has('register'))
        <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
      @endif
    @else
        <li class="nav-item">
          <a href="{{ route('tasks.new') }}" class="btn btn-primary">Créer une tâche</a>
        </li>
        <li class="nav-item">
          <a href="{{ route('maintenances.new') }}" class="btn btn-info">Nouvelle maintenance</a>
        </li>
    @endguest
  </ul>
</nav>
