<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">

<nav class="bg-blue-600 text-white p-4 flex justify-between">
    <span>App</span>
    <div>
        <a href="/users" class="mr-4">Usuarios</a>
        <a href="/users/create">Crear</a>
    </div>
</nav>

<div class="container mx-auto mt-6">
    @yield('content')
</div>

</body>
</html>
