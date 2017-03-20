<html>
<head>
    <link rel="stylesheet" href="css/blogster.css">
    <title>@yield('title')</title>
</head>
<body>

<div class="sidebar">
    @section('sidebar')
        @yield('userInfos')
    @show
</div>

<div class="container">
    @yield('content')
</div>
</body>
</html>