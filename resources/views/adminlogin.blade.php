<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.0/dist/js/bootstrap-icons.min.js" integrity="sha384-c8Bs+vMY2x6oQaZbQ9W1X4QX58Il/6pIywrwb+9mz9NtOse3SS3a7VnYB3Q6F9BU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Login</title>
    <style>
        body {
            background-color: #f8f9fa; /* Add a light background color */
        }
        .card {
            border: none; /* Remove card border */
        }
        .card-header {
            background-color: #007bff; /* Customize card header background color */
            color: #fff; /* Customize card header text color */
        }
        .btn-primary {
            background-color: #007bff; /* Customize primary button color */
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3; /* Darker color on hover */
        }
        .form-control {
            border-radius: 0; /* Remove input border radius */
        }
        .alert {
            border-radius: 0; /* Remove alert border radius */
        }
        footer {
            color: #6c757d; /* Customize footer text color */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="card shadow-lg">
                    <div class="card-header text-center">
                        <h1 class="card-title">Admin Login</h1>
                    </div>
                    @if(Session::has('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ Session::get('error') }}
                        </div>
                    @endif
                    <div class="card-body">
                        <form action="{{route('admin')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="#" name="email" class="form-control" id="email" required autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group">
                                    <input type="password" name="password" class="form-control" id="password" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary btn-lg btn-block">Login</button>
                            </div>
                            <div class="mb-3">
                                <a class="d-block text-center" href="{{ route('login') }}">Login as User</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-center mt-3">
        &copy; SIBOL Up. All rights reserved. 2024. 
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.0/dist/js/bootstrap-icons.min.js" integrity="sha384-c8Bs+vMY2x6oQaZbQ9W1X4QX58Il/6pIywrwb+9mz9NtOse3SS3a7VnYB3Q6F9BU" crossorigin="anonymous"></script>
    <script>
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById("password");
            var eyeIcon = document.getElementById("eye-icon");
            
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                eyeIcon.classList.remove("bi-eye");
                eyeIcon.classList.add("bi-eye-slash");
            } else {
                passwordInput.type = "password";
                eyeIcon.classList.remove("bi-eye-slash");
                eyeIcon.classList.add("bi-eye");
            }
        }
    </script>
</body>
</html>