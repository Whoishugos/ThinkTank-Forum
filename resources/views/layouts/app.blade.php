<!DOCTYPE html>
<html lang="">
    <head>
        @include('partials.head')
    </head>
   <body>

    @include('partials.nav')
    @yield('content')
    @include('partials.footer')
    @yield('before-script')
    @include('partials.script')
    @yield('after-script')

   </body>
</html>
