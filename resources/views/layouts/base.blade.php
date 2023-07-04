<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{asset('favicon.ico')}}">
    <title>@yield('page_title')</title>
    @vite('resources/css/app.css', 'resources/js/app.js')

    <style>
        .table {
            border-spacing: 0 15px;
        }

        i {
            font-size: 1rem !important;
        }

        .table tr {
            border-radius: 20px;
        }

        tr td:last-child,
        tr th:last-child {
            border-radius: 0 .625rem .625rem 0;
        }

        tr td:nth-child(1),
        tr th:nth-child(1) {
            border-radius: .625rem 0 0 .625rem;
        }
    </style>
</head>

<body>
    @yield('header')
    @yield('hero')
    @yield('features')
    @yield('contents')
    @yield('footer')
    <script>
        var button = document.getElementById('login');
        button.onclick = function() {
            location.assign('/admin');
        }
    </script>
</body>

</html>