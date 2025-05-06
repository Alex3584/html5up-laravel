<header id="header">
  <a
    href="#"
    class="logo"
  ><strong>Editorial</strong> by HTML5 UP</a>
  <ul class="icons">
    @foreach ([
      ['name' => 'Twitter', 'icon' => 'fa-twitter'], 
      ['name' => 'Facebook', 'icon' => 'fa-facebook-f'], 
      ['name' => 'Snapchat', 'icon' => 'fa-snapchat-ghost'], 
      ['name' => 'Instagram', 'icon' => 'fa-instagram'], 
      ['name' => 'Medium', 'icon' => 'fa-medium-m']
      ] as $social)
      <li>
        <a
          href="#"
          class="icon brands {{ $social['icon'] }}"
        >
          <span class="label">{{ $social['name'] }}</span>
        </a>
      </li>
    @endforeach
  </ul>
</header>
