<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Bootstrap CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    {{-- Bootstrap Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    {{-- External CSS --}}
    <link rel="stylesheet" href="{{ url('mydesign/css/style.css') }}" type="text/css" />
    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;800&display=swap" rel="stylesheet">
    {{-- Google Material Icon --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    {{-- Favicon --}}
    <link rel="icon" href="{{ url('mydesign/image/company.png?v=2') }}" type="image/png" />
    {{-- Title --}}
    <title>@yield("title")</title>

</head>

<body>
    
    <div class="container">

        @include('layout.navigation')

        @yield('content')

    </div>

</body>

</html>
