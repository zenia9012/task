<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    @include('includes.meta')

    <title>{{ config('app.name') }}</title>

    <!-- Styles -->
    @include('includes.css')

</head>
<body>
    <div id="site">
        @include('includes.header')

       <div class="container">
            @yield('content')
       </div>
    </div>

    <!-- Scripts -->
    @include('includes.script')
</body>

@include('includes.footer')

</html>
