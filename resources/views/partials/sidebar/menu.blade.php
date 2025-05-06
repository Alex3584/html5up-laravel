@php
  $isHome = Route::currentRouteName() === 'home';
@endphp

<nav id="menu">
  <header class="major">
    <h2>Menu</h2>
  </header>
  <ul>
    <li><a href="{{ route('home') }}">Homepage</a></li>
    <li><a href="{{ route('generic') }}">Generic</a></li>
    <li><a href="{{ route('elements') }}">Elements</a></li>
    <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
    <li><a href="{{ route('profile') }}">Profile</a></li>
    <li><a href="{{ route('settings') }}">Settings</a></li>

    @unless ($isHome)
      <li>
        <span class="opener">Submenu</span>
        <ul>
          <li><a href="#">Lorem Dolor</a></li>
          <li><a href="#">Ipsum Adipiscing</a></li>
          <li><a href="#">Tempus Magna</a></li>
          <li><a href="#">Feugiat Veroeros</a></li>
        </ul>
      </li>
      <li><a href="#">Etiam Dolore</a></li>
      <li><a href="#">Adipiscing</a></li>
      <li>
        <span class="opener">Another Submenu</span>
        <ul>
          <li><a href="#">Lorem Dolor</a></li>
          <li><a href="#">Ipsum Adipiscing</a></li>
          <li><a href="#">Tempus Magna</a></li>
          <li><a href="#">Feugiat Veroeros</a></li>
        </ul>
      </li>
      <li><a href="#">Maximus Erat</a></li>
      <li><a href="#">Sapien Mauris</a></li>
      <li><a href="#">Amet Lacinia</a></li>
    @endunless
  </ul>
</nav>
