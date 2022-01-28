<header class="container py-5">
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link {{ (Route::currentRouteName() === 'home') ? 'active' : '' }}" aria-current="page" href="{{route('home')}}">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ (Route::currentRouteName() === 'comics.index') ? 'active' : '' }}" href="{{route('comics.index')}}">Comics</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{ (Route::currentRouteName() === 'comics.create') ? 'active' : '' }}" href="{{route('comics.create')}}">Add comics</a>
    </li>
  </ul>
</header>