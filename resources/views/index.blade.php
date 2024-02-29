<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Admin Dashboard</title>
    <style>
        .image-container {
            max-width: 150px;
            max-height: 150px;
        }
    </style>
</head>
<body class="p-5">
    <div class="container">
        <h1 class="text-center mb-3">MENU ADMIN</h1>
        @if (Session::has('success'))
        <div class="alert alert-success text-center" role="alert">
            {{Session::get('success')}}
        </div>
        @endif
        <div class="d-flex justify-content-end mb-3">
            <a href="{{route('create')}}" class="btn btn-primary shadow">Add New Product</a>
            <a href="{{route('login')}}" class="btn btn-primary shadow">Log out</a>
        </div>
        <table class="table table-bordered">
            <thead class="text-center">     
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Total cost</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @forelse($menu as $menus)
                <tr>
                    <td>{{$menus->id}}</td>
                    <td style="font-size: 20px;">{{$menus->name}}</td>
                    <td>
                        <div class="image-container">
                            <img src="{{asset('images')}}/{{ $menus->image}}" class="img-fluid" alt="{{$menus->name}}">
                        </div>
                    </td>
                    <td>{{$menus->description}}</td>
                    <td>₱
{{$menus->price}}</td>
                    <td class="text-center">
                        <form action="{{route('destroy',$menus->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="{{route('edit',$menus->id)}}" class="btn btn-success shadow">Edit</a>
                            <a href="{{route('show',$menus->id)}}" class="btn btn-info shadow">Show</a>
                            <button type="submit" class="btn btn-danger mt-1 shadow">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center">No Menu Added</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>
