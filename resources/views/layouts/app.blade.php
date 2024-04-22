<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet'
        integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
    <title>Laravel Model Controller</title>

    <!-- Fonts -->

    <!-- Style  -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])


</head>

<body class="antialiased">
    @include('partials.header')

    <main>
        @yield('content')
    </main>


    @include('partials.footer')

</body>

</html>
