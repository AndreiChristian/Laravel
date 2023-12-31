<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Todo Manager' }}</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-800 text-white ">
    <nav class="flex items-center justify-between gap-4 sticky top-0 box-border p-6 ">
        <span>Book Store</span>
        <span class="flex-1"></span>
        <a href="/publisher">All publishers</a>
        <a href="/author">All Authors</a>
        </div>
    </nav>
    {{ $slot }}
</body>

</html>
</div>
