<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="javascript:void(0);">Laravel</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" href="{{route('users.index')}}">Users</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('users.age')}}">User age than 20</a>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
            <table class="table table-bordered mt-2">
                <thead>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Age</th>
                    <th>Programming Language</th>
                    <th>
                        <a href="{{route('users.add')}}" class="btn btn-success">Create</a>
                    </th>
                </thead>
                <tbody>
                    @foreach($model as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{($user->gender == 1) ? "Nam" : "Nữ"}}</td>
                        <td>{{$user->age}}</td>
                        <td>{{$user->programming_language}}</td>
                        <td>
                            <a href="{{route('users.edit',['id'=>$user->id])}}" class="btn btn-success">Edit</a>
                            <form action="{{route('users.delete',['id'=>$user->id])}}" method="post">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger mt-1">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>