<!DOCTYPE html>
<html lang="en" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;500;600;700&family=Karla:wght@800&family=Montserrat:wght@300&display=swap" rel="stylesheet"> 
    
    <!-- Icons -->
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.15.4/css/all.css' integrity='sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm' crossorigin='anonymous'>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <script src="{{ asset('js/app.js') }}" defer></script>

    <title>@yield('page-title', 'Panel')</title>
</head>

<body class="bg-coolgray-200 font-cabin antialiased min-h-screen overflow-hidden grid grid-cols-12">

    <!-- Sidebar -->
    <div class="col-span-2">
        @include('includes.sidebar')
    </div>

    <!-- Content -->
    <div class="col-span-10 px-8 h-screen overflow-y-auto pb-20">
        <!-- Header -->
        @include('includes.header')

        {{ $slot }}
    </div>

    @stack('scripts')
</body>

</html>
