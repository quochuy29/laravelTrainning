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
            <h1 class="text-center">Edit User</h1>
            <form action="{{route('users.update',['id'=>$model->id])}}" method="POST" enctype="multipart/form-data" class="p-3">
                @method('PUT')
                @csrf
                <div class="row p-2">
                    <div class="mb-3 col">
                        <label for="" class="form-label">User Name</label>
                        <input type="text" class="form-control" name="name" value="{{$model->name}}">
                        @error('name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3 col">
                        <label for="" class="form-label">User Email</label>
                        <input type="text" class="form-control" name="email" value="{{$model->email}}">
                        @error('email')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3 col">
                        <label for="" class="form-label">User Age</label>
                        <input type="number" class="form-control" name="age" value="{{$model->age}}">
                        @error('age')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="row p-2">
                    <div class="mb-3 col">
                        <label for="" class="form-label">User Gender</label>
                        <select name="gender" class="form-select">
                            <option value="">Choose user gender</option>
                            <option <?= ($model->gender == "1") ? "selected" : "" ?> value="1">Male</option>
                            <option <?= ($model->gender == "2") ? "selected" : "" ?> value="2">Female</option>
                        </select>
                        @error('gender')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3 col">
                        <label for="" class="form-label">User Programming Language</label>
                        <select name="programming_language" class="form-select">
                            <option value="">Choose programming language</option>
                            <option <?= ($model->programming_language == "PHP") ? "selected" : "" ?> value="PHP">PHP</option>
                            <option <?= ($model->programming_language == "PYTHON") ? "selected" : "" ?> value="PYTHON">PYTHON</option>
                            <option <?= ($model->programming_language == "JAVASCRIPT") ? "selected" : "" ?> value="JAVASCRIPT">JAVASCRIPT</option>
                            <option <?= ($model->programming_language == "CSS") ? "selected" : "" ?> value="CSS">CSS</option>
                            <option <?= ($model->programming_language == "VUEJS") ? "selected" : "" ?> value="VUEJS">VUEJS</option>
                        </select>
                        @error('programming_language')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="row action text-center p-2">
                    <div class="mb-3-col">
                        <button type="submit" class="btn btn-primary" id="addForm">Thêm</button>
                        <button type="button" class="btn btn-danger" id="cancel">Huỷ</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>