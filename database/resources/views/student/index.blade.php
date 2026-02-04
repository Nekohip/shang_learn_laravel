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
    <h1>學生資料表</h1>
    <div class="d-flex justify-content-end">
        <button class="btn btn-success">
            <a href="{{route('sts.create')}}">新增</a>
        </button>
    </div>
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
                <td>
                    {{-- <a href="{{ route('sts.edit', ['st' => $value->id]) }}" class="btn btn-warning">修改</a> --}}
                    <form action="{{ route('sts.destroy', ['st' => $value->id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('sts.edit', ['st' => $value->id]) }}"
                            class="btn btn-warning">修改</a>
                        <button type="submit" class="btn btn-danger">刪除</button>
                        {{-- <a href="{{ route('sts.destroy', ['st' => $value->id]) }}" class="btn btn-danger">刪除</a> --}}
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</body>

</html>