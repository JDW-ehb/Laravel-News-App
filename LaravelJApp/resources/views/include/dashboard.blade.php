<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{ route('latest-news') }}">{{ config('app.name') }}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <!-- Other menu items -->

      <!-- User Dropdown -->
      @auth
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{ auth()->user()->name }}
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('profile') }}">Profile</a>
          <a class="dropdown-item" href="{{ route('logout.get') }}">Logout</a>
          <!-- Additional menu items -->
        </div>
      </li>
      @else
      <li class="nav-item">
        <a class="nav-link" href="{{ route('login.get') }}">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('registration.get') }}">Register</a>
      </li>
      @endauth

      <!-- Admin Links -->
      @if(auth()->check() && auth()->user()->isAdmin)
      <li class="nav-item">
        <a class="nav-link" href="{{ route('news.create') }}">Create Articles</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.index') }}">Admin Page</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('messages.show') }}">View Messages</a>
      </li>
      @endif
      <li class="nav-item">
          <a class="nav-link" href="{{ route('faqs.index') }}">FAQ</a>
      </li>
      @unless(auth()->check() && auth()->user()->isAdmin)
      <li class="nav-item">
          <a class="nav-link" href="{{ route('contact.show') }}">Contact Us</a>
      </li>
      @endunless

      <li class="nav-item">
          <a class="nav-link" href="{{ route('about') }}">about</a>
      </li>
    </ul>
    
    <!-- Search Form -->
    <!-- ... -->
  </div>
</nav>
