<!-- navbar.blade.php -->


<nav class="navbar">
    <div class="navbar-brand">
      <a href="{{ url('/') }}">Logo</a>
    </div>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/') }}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/tables') }}">Tables</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/devices') }}">Devices</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/employees') }}">Employees</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/about') }}">About</a>
      </li>
    </ul>
  </nav>
