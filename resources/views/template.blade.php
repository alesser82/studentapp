<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student App</title>
    {{-- Bootstrap --}}
    <link href="{{ asset('vendor/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    {{-- Font Awesome --}}
    <link href="{{ asset('vendor/fontawesome/css/all.min.css') }}" rel="stylesheet">
</head>
<body>
@include('navbar')
@yield('main')
@yield('footer')
    {{-- JQuery --}}
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
</body>
</html>