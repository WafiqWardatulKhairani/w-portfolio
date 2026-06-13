<!DOCTYPE html>
<html>

<head>
    <title>Portfolio Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/admin_layout.css')}}">
</head>

<body>

<!-- TOP BAR -->
<header class="topbar">
    <div class="logo">Portfolio Admin</div>

    <nav class="nav">
        <a href="/private/projects">Projects</a>
        <a href="/">View Site</a>
    </nav>
</header>

<!-- PAGE CONTENT -->
<main class="container">
    @yield('content')
</main>

</body>
</html>