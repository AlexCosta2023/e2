<!doctype html>
<html lang='en'>
<head>

    <title>@yield('title', $app->config('app.name'))</title>

    <meta charset='utf-8'>

    <link rel='shortcut icon' href='/favicon.ico'>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

    @yield('head')

    <style>
        body {
            background-image: url('/images/dice.jpeg');
            background-repeat: repeat;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.9); /* Add a semi-transparent white background to the container */
            padding: 20px;
            border-radius: 10px;
            margin: 50px auto; /* Center the container vertically and horizontally */
            max-width: 800px; /* Adjust the maximum width as needed */
        }
    </style>

</head>
<body>

<header>
    <!-- <h1>{{ $app->config('app.name') }}</h1> -->
</header>

<main>
    @yield('content')
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

@yield('body')

</body>
</html>