<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
</head>

<body>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-7">
                <div class="card mt-3">
                    <div class="card-header">
                        <h5>Upload Image</h5>
                    </div>
                    @foreach ($list as $value)

                    <img src="{{asset('/storage/'.$value->path)}}" alt="">
                    @endforeach
                    <div class="crd-body">
                        <form action="{{route('saveImg')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="image-upload" class="form-control">
                            <button type="submit" class=" mt-2 btn btn-primary">Upload</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>