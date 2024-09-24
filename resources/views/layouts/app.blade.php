<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boolpress | admin</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>

<body>
    @include('Admin.partials.header')
    <div class="main-wrapper d-flex">
        @auth
            @include('Admin.partials.aside')
        @endauth

        <div class="content">
            @yield('content')
        </div>

    </div>
    @include('Admin.partials.footer')



</body>

</html>
