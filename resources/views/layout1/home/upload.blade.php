<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <form method="post" enctype="multipart/form-data" action="{{url('/upload')}}">
        @csrf
        <div class="container">
            <div class="form-group mt-3 mb-2">
                <label for="" class="fw-bold fs-4">Upload File</label> 
                <input type="file" name="image" id="" class="form-control mt-3 fw-bold" placeholder="" aria-describedat="helpid">
            </div>
            <button class="btn btn-primary mt-2 fw-bold">upload</button>
        </div>
    </form>
</body>
</html>