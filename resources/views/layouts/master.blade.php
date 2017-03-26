<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DWA 15 :: Assignment 3 - Laravel</title>
    <link rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://maxcdn.bootswatchcdn.com/bootstrap/3.3.7/flatly/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/app.css" />
</head>
<body>
    <!-- HEADER SECTION -->
    <header>
        @stack('header')
    </header>

    <!-- CONTENT SECTION -->
    <div class="container-fluid">
        @yield('content')
    </div>
</body>
</html>
