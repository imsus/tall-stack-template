<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" media="print" onload="this.onload=null;this.media='all'">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" media="print" onload="this.onload=null;this.media='all'">
    @livewireStyles
</head>
<body class="font-sans antialiased">
    @yield('content')
    <script defer src="{{ asset('js/manifest.js') }}"></script>
    <script defer src="{{ asset('js/vendor.js') }}"></script>
    <script defer src="{{ asset('js/app.js') }}"></script>
    @livewireScripts
</body>
</html>
