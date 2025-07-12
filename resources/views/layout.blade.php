<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/svg+xml" sizes="192x192" href="/favicon.svg" />
    <title>MATAKOS MOTORS</title>
    <script type="text/javascript" charset="UTF-8" src="//cdn.cookie-script.com/s/9e9ad07ad1ddf6ed301aa1899ef90b6a.js">
    </script>
    @vite(['resources/assets/sass/app.scss', 'resources/assets/js/app.js'])
    <link rel="stylesheet" href="https://use.typekit.net/wto6cfh.css">
    <meta property="og:title" content="Matakos Motors">
    <meta property="og:description" content="Μοτοσυκλέτες - Αξεσουάρ">
    <meta property="og:image" content="http://www.matakosmotors.gr/images/hero.jpg">
    <meta property="og:url" content="http://www.matakosmotors.gr/">
</head>

<body class="@yield('body-class')">
    @include('partials.header')
    <main>
        @yield('content')
    </main>
    @include('partials.footer')
    @stack('scripts')
</body>

</html>
