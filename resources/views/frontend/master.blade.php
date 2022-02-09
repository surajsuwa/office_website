<!DOCTYPE html>
<html lang="en">

<head>
    @include('frontend.includes.head')

    @yield('custom_css')
</head>

<body>

    @include('frontend.includes.header')

    <main class="overflow-hidden">

        @yield('content')

        @include('frontend.includes.footer')

    </main>

    @include('frontend.includes.footer1')

</body>

</html>
