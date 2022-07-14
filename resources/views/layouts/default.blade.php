<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') | Test Auth JWT</title>
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
</head>
<body>

<div class="container body"></div>

    @yield('content')


    <script src="{{ mix('/js/app.js') }}"></script>
    @yield('script')
</body>
</html>
