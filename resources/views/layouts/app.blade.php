<!DOCTYPE html>
<html lang="en" dir="{{ app()->getLocale() === 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page-title', 'Panel')</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body class="bg-coolgray-200 font-sans antialiased min-h-screen overflow-hidden grid grid-cols-12">

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

</html>
