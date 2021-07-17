<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="author" content="">
        {{-- <link rel="icon" href="../sms.png"> --}}
    
        <title>SMS</title>

        <!--Icon-->
        <link rel="shortcut icon" href="{{ asset('sms.png') }}">
        
    
        {{-- BOOTSTRAP & FONTAWESOME STYLESHEETS --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}

        {{-- FONTAWESOME --}}
        {{-- <link rel="stylesheet" href="{{ asset('') }}"> --}}

        {{-- SIDEBAR --}}
        @yield('sidebarCss')
    </head>
<body class="bg-dark">
    @yield('content')

    @yield('scripts')
</body>
</html>