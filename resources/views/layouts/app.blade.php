<!DOCTYPE html>
<html>

<head>
    <title>Portofolio - Wafiq Wardatul Khairani</title>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
</head>

<body>

    @include('layouts.navbar')

    <main class="container">
        @yield('content')
    </main>

    @include('layouts.footer')

</body>

</html>