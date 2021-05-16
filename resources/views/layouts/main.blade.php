<!DOCTYPE html>
<html lang="en-US">
    <head>
        @include('../partials/frontend/main-head')
    </head>
    <body>
            @include('../partials/frontend/main-header')
                @yield('content')
            @include('../partials/frontend/main-footer')
    </body>
</html>