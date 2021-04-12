<head>
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<main class="container-fluid">
    <div class="col-md-10 mx-auto my-5 bg-light p-5 border border-3 shadow shadow-lg">
        <h3>Welcome {{ $name }} </h3>
        <p>mail: {{ $mail }}</p>
        <p>address: {{ $address }}</p>
        <p>phone: {{ $phone }}</p>
        <p>age: {{ $age }}</p>
        <p>nationalId: {{ $nationalId }}</p>
        <p>about: {{ $about_user }}</p>
    </div>
</main>
