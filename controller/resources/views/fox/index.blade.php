<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fox Index</title>
</head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.8/css/bootstrap.min.css" 
      integrity="sha512-2bBQCjcnw658Lho4nlXJcc6WkV/UxpE/sAokbXPxQNGqmNdQrWqtw26Ns9kFF/yG792pKR1Sx8/Y1Lf1XN4GKA==" 
      crossorigin="anonymous" 
      referrerpolicy="no-referrer" />

<body>
    <!-- 用name呼叫路由 -->
    <a href="{{route('foxss.f1')}}">1F</a>
    <a href="{{route('foxs.f2')}}">2F</a>
    <a href="{{route('foxs.f3')}}">3F</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>age</th>
            </tr>
        </thead>
    
        <tbody>
        @foreach($datas as $value)
            <tr>
                <!-- {{}}是laravel專用語法 -->
                <td>{{ $value['id'] }}</td>
                <td>{{ $value['name'] }}</td>
                <td>{{ $value['age'] }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>