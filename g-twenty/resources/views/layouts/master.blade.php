<!DOCTYPE html>
<head>
    <html lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" type="text/css" href="style/style.css" />
    <title>G-Twenty</title>
</head>
<body>
    @section('navbar')
    <div>
        <a href="/home">Home</a> | <a href="/about">About</a>
    @show
    <div class="container">
        @yield('content')
    </div>
</body>
</html>