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
            <td>Title</td>
            <td>Content</td>
            <td>Action</td>

        </tr>
        @foreach ($data as $article)
            <tr>
                <td>{{ $article->title }}</td>
                <td>{{ $article->content }}</td>
                
                <td>
                    <a href=" {{ url('editArticle/'.$article->id) }} " class="btn btn-primary">Edit</a>
                    <a href=" {{ url('deleteArticle/'.$article->id) }} " class="btn btn-danger">Delete</a>
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
