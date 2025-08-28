<!DOCTYPE html>
<html lang="en">
    @include('layouts.welcome.head')
    @yield('link')
    <body>
        @include('layouts.welcome.navbar')
        @yield('content')
        @include('layouts.welcome.footer')
        @yield('scripts')
    </body>
</html>