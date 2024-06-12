<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nama Aplikasi</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="flex flex-col min-h-screen">
    <header>
        <!-- Header content -->
    </header>

    <main class="flex-grow">
        @yield('content')
    </main>

    @include('components.footer')

    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
