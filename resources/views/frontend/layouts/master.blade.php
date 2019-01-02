<html lang="zh-TW">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title') - {{ config('mygroup.title') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/btj.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

</head>

<body>
@include('frontend.layouts.nav')
@yield('header')
    <div class="container">
    @yield('content')
    </div>
@include('frontend.layouts.footer')

<script>

</script>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
