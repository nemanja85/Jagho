<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Jakho') }} - @yield('title') </title>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

     <!-- Favicon -->
    <link rel="icon" href="images/logo-favicion.png" type="image/gif" sizes="16x16">

    <!-- Styles -->
    <link href="{{ asset('css/materialize.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
     <link href="{{ asset('css/sweetalert.css') }}" rel="stylesheet">
    @yield('style')
</head>
<body>

    @include('includes.navigation-en')

    @yield('content')

    @include('includes.footer')

    @yield('script')

</body>
</html>


