<head>
    <title>Display</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<main class="container">
    <div class="row">
    
    <table class="table table-bordered col-10">
        <tr>
            <td>Name</td>
            <td>Mail</td>
            <td>Age</td>
            <td>Phone</td>
            <td>National ID</td>
            <td>Address</td>
            <td>Action</td>

        </tr>
        @foreach ($data as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->mail }}</td>
                <td>{{ $user->age }}</td>
                <td>{{ $user->phone }}</td>
                <td>{{ $user->nationalId }}</td>
                <td>{{ $user->address }}</td>
                <td>
                    <a href=" {{ url('') }} ">Edit</a>
                    <a href=" {{ url('delete/'.$user->id) }} ">Delete</a>
                </td>
            </tr>
        @endforeach

    </table>
    {{-- <h3>Welcome {{ $name }} </h3>
        <p>mail: {{ $mail }}</p>
        <p>address: {{ $address }}</p>
        <p>phone: {{ $phone }}</p>
        <p>age: {{ $age }}</p>
        <p>nationalId: {{ $nationalId }}</p>
        <p>about: {{ $about }}</p> --}}
    </div>
</main>
