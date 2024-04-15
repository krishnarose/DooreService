<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.client.head')
    <title>
        @yield('title')
    </title>
</head>
<body>

<!-- Navbar -->
@include('layouts.client.nav')

<!-- Content -->
@yield('content')

<!-- Footer -->
@include('layouts.client.footer')

<!-- JavaScript for mobile menu -->

@include('layouts.client.scripts')


</body>
</html>
