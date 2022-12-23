<div class="container flexbox">
  <div id="logo"><a href="/">LOGO</a></div>

  <nav>

    <ul>

      <li><a href="/">Home</a></li>
      @auth
        <li><a href="/admin">Admin Dashboard</a></li>
        <li><a href="/logout">Logout</a></li>
      @else
        <li><a href="/signup">Sign Up</a></li>
        <li><a href="/login">Login</a></li>
      @endauth

    </ul>

  </nav>
</div>
