<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Site | @yield('title', 'Home Page')</title>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
    @section('footerScript')
        <script src='app.js'></script>
    @show
</body>
</html>
