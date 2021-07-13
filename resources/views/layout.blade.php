<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <style>
        .container {
            width: 70%;
            margin: auto;
            background: whitesmoke;
            padding: 10px;
            font-family: 'Montserrat', sans-serif;
            font-size: 16px;
        }
        ul {
            list-style: none;
        }
        ul, li {
            padding: 4px;
            margin: 4px 0px;
        }
        .text_center {
            text-align: center;
            margin: 10px 0px;
        }
    </style>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
