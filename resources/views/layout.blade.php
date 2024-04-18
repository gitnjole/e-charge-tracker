<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>@yield('title')</title>
  @yield('styles')
</head>
<body class="bg-gradient-to-b from-[#101212] to-[#08201D]">
    @yield('content')
    @yield('scripts')
</body>
</html>