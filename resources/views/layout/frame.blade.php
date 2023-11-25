<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>@yield('title')</title>
</head>
<body>
          @guest
          <div class="navbar">
            <a href="{{ url('/') }}">Employer Form Submission Management</a>
            <ul class="navbar">
          @else
          <!-- Display user dropdown menu when logged in -->
          <li class="nav-item dropdown">
              <div class="dropdown-menu" aria-labelledby="userDropdown">
                  @auth
                  <li><a href=""> Name </a></li>
                  <li><a href="">Logout</a></li>
                  <form method="POST" action="">
                    @csrf

                    </form>
                  @endauth
              </div>
          </li>
          @endguest
      </ul>
      </div>
    @yield('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous" defer></script>
</body>
</html>
