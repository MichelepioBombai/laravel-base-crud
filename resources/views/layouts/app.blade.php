<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }} - @yield('page-name') </title>
    @vite('resources/js/app.js')
</head>

<body>
    @include('partials.header')

    <main>
        <section class="container">
            <h1 class="my-5">@yield('page-name')</h1>
            @yield('main_content')
        </section>
    </main>

    @yield('footer')
</body>

</html>