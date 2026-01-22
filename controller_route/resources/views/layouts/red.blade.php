<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RED - @yield("title")</title>
    <style>
        body {
            background-color: red;
        }
    </style>
</head>
<body>
    <h1>RED RED</h1>
    <div class="container">
        @yield("content")
    </div>
</body>
</html>
