<html>

<head>
    <title>{{ $title ?? 'Todo Manager' }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <nav class="box-border flex items-center justify-start gap-8 p-4">
        <a href="/posts">All</a>
        <a href="/posts/create">Create</a>
    </nav>
    {{ $slot }}
</body>

</html>
