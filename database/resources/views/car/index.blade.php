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
<table class="table">
    <thead>
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>mobile</th>
        </tr>
    </thead>
    <tbody>
        @foreach($datas as $value)
            <tr>
                <td>{{$value->id}}</td>
                <td>{{$value->name}}</td>
                <td>{{$value->mobile}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
</body>

</html>