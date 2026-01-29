<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.8/css/bootstrap.min.css"
 integrity="sha512-2bBQCjcnw658Lho4nlXJcc6WkV/UxpE/sAokbXPxQNGqmNdQrWqtw26Ns9kFF/yG792pKR1Sx8/Y1Lf1XN4GKA=="
 crossorigin="anonymous"
 referrerpolicy="no-referrer" />

<body>
    <div class="container mt-3">
    <h2>Student ctreate form</h2>
    <form action="{{route('sts.update', $data->id)}}" method="POST">
        @csrf
        @method("PUT")
        <div class="mb-3 mt-3">
            <label for="name" class="for-label">Name:</label>
            <input type="name" class="form-control" id="name" name="name" placeholder="Enter Name" value="{{$data->name}}">
        </div>

        <div class="mb-3 mt-3">
            <label for="mobile" class="for-label">Mobile:</label>
            <input type="name" class="form-control" id="mobile" name="mobile" placeholder="Enter Name" value="{{$data->mobile}}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>