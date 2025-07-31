<!DOCTYPE html>
<html lang="">
    <head>
        @include('partials.head')
    </head>
   <body>

    @include('partials.nav')
    @yield('body')
    @yield('before-script')
    @include('partials.script')
    @yield('after-script')

   </body>
</html>
