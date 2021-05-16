<!DOCTYPE html>
<html lang="en-US">
    <head>
        @include('../partials/frontend/main-head')
    </head>
    <body>
        @include('../partials/frontend/main-header')
        <div class="main-sec">
            @yield('content')
        </div>
        @include('../partials/frontend/main-footer')
    </body>
</html>