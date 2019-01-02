<html>
<head>
    <title>{{ config('mygroup.title') }}</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
@include('frontend.layouts.nav')
@include('frontend.layouts.footer')
</div>
</body>
</html>
