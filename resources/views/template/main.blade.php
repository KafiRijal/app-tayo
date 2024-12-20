<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>TAyo</title>
    @include('template.styles')
</head>

<body>
    @include('template.header')
    @yield('content')
    @include('template.footer')

    @include('template.scripts')
</body>

</html>
