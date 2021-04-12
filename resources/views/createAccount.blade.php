<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <main class="container-fluid">
        <div class="col-md-8 mx-auto my-5 bg-light p-5 border border-3 shadow shadow-lg">
            <form action="{{ url('profile') }}" method="POST" enctype="multipart/form-data">
                <h1 class="text-center">Create an account</h1>
                @csrf
                <div class="row">
                    <div>
                        <div class="row my-3">
                            <div class="col-md-3 col-12"><label for="name" class="form-label">Name</label></div>
                            <div class="col-md-8 col-12">
                                <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>

                        <div class="row my-3">
                            <div class="col-md-3 col-12"><label for="mail" class="form-label">Email</label></div>
                            <div class="col-md-8 col-12">
                                <input type="text" name="mail" class="form-control" value="{{ old('mail') }}">
                                @error('mail')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>

                        <div class="row my-3">
                            <div class="col-md-3 col-12"><label for="age" class="form-label">Age</label></div>
                            <div class="col-md-8 col-12">
                                <input type="text" name="age" class="form-control" value="{{ old('age') }}">
                                @error('age')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>

                        <div class="row my-3">
                            <div class="col-md-3 col-12"><label for="phone" class="form-label">Phone</label></div>
                            <div class="col-md-8 col-12">
                                <input type="text" name="phone" class="form-control" value="{{ old('phone') }}">
                                @error('phone')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>

                        <div class="row my-3">
                            <div class="col-md-3 col-12"><label for="password" class="form-label">Password</label></div>
                            <div class="col-md-8 col-12">
                                <input type="password" name="password" class="form-control" value="{{ old('password') }}">
                                @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>

                        <div class="row my-3">
                            <div class="col-md-3 col-12"><label for="nationalID" class="form-label">Nationa lID</label>
                            </div>
                            <div class="col-md-8 col-12">
                                <input type="text" name="nationalId" class="form-control" value="{{ old('nationalId') }}">
                                @error('nationalId')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row my-3">
                            <div class="col-md-3 col-12"><label for="address" class="form-label">Address</label></div>
                            <div class="col-md-8 col-12">
                                <input type="text" name="address" class="form-control" value="{{ old('address') }}">
                                @error('address')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>
                        <div class="row my-3">
                            <div class="col-md-3 col-12"><label for="about_user" class="form-label">About Me</label></div>
                            <div class="col-md-8 col-12">
                                <textarea name="about_user" class="form-control">{{ old('about_user') }}</textarea>
                                @error('about_user')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>



                        {{-- <div class="row my-3">
                            <div class="col-md-2 col-12"><label for="gender" class="form-label">Gender</label></div>
                            <div class="col-md-5 col-12">
                                <div class="form-check">
                                    <input class="form-check-input" value="Male" type="radio" name="gender" id="flexRadioDefault1" checked>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" value="Female" type="radio" name="gender" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Female
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-5 col-12">
                            </div>
                        </div> --}}

                        {{-- <div class="row my-3">
                            <div class="col-md-2 col-12"><label for="img" class="form-label">Image</label></div>
                            <div class="col-md-5 col-12">
                                <input type="file" name="img" class="form-control">
                                    </div>
                            <div class="col-md-5 col-12">
                            </div>
                        </div> --}}

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
