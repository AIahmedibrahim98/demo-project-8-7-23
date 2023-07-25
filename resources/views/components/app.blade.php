<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <h1 class="text-3xl text-center text-red-800 font-bold underline">
        {{ $title }}
    </h1>
    <div class='content'>
        {{ $slot }}
    </div>
    <footer>
        {{ $footer ?? '' }}
    </footer>
</body>

</html>
