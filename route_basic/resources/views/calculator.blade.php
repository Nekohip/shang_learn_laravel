<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator</title>
</head>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.8/css/bootstrap.min.css" 
      integrity="sha512-2bBQCjcnw658Lho4nlXJcc6WkV/UxpE/sAokbXPxQNGqmNdQrWqtw26Ns9kFF/yG792pKR1Sx8/Y1Lf1XN4GKA==" 
      crossorigin="anonymous" 
      referrerpolicy="no-referrer" />

<style>
    .table {
        width:50%;
        margin: auto;
    }
</style>

<body>
    <?php
        // dd($data ?? "no data");
    ?>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>num1</th>
                <th>num2</th>
                <th>plus</th>
                <th>minus</th>
                <th>multiply</th>
                <th>divide</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td><?= $data["num1"] ?></td>
                <td><?= $data["num2"] ?></td>
                <td><?= $data["plus"] ?></td>
                <td><?= $data["minus"] ?></td>
                <td><?= $data["multiply"] ?></td>
                <td><?= $data["divide"] ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>