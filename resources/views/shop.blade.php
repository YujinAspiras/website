 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Recipe Website</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Custom styles can be added here */
  </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light"> 
    Menu Website
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('about')}}">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('login')}}">Log out</a>
      </li>
    </ul>
  </div>
</nav>

      <div class="container mt-4">
          <h2 class="mb-3 text-center">Phinma Popular Foods</h2>
          <p class="text-center mb-5">Browse through our mouthwatering dishes! In Dagupan</p>    
          @if (Session::has('success'))
          <div class="alert alert-success text-center" role="alert">
              {{ Session::get('success') }}
          </div>
          @endif
          @yield('content')
      </div>

      <!-- Bootstrap Bundle with Popper -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
  </html>
