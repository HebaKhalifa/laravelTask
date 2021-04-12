<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Article</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>

    <main class="container-fluid">
        <div class="col-md-8 mx-auto my-5 bg-light p-5 border border-3 shadow shadow-lg">
            <form action="{{ url('submit') }}" method="POST" enctype="multipart/form-data">
                <h1 class="text-center">Create an account</h1>
                @csrf
                <div class="row">
                    <div>
                        <div class="row my-3">
                            <div class="col-md-3 col-12"><label for="title" class="form-label">Title</label></div>
                            <div class="col-md-8 col-12">
                                <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                                @error('title')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>

                        <div class="row my-3">
                            <div class="col-md-3 col-12"><label for="content" class="form-label">Content</label></div>
                            <div class="col-md-8 col-12">
                                <input type="text" name="content" class="form-control" value="{{ old('content') }}">
                                @error('content')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>

                       
                    </div>

                </div>

                <div class="col-2 mx-md-auto text-center">
                    <input type="submit" value="Send" class="btn btn-success">
                </div>


            </form>

        </div>


    </main>

    <!----------------------JS links----------------------->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
</body>

</html>
