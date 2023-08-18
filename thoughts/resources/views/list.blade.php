<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Styles -->
</head>

<body>
    <h1 class="text-3xl font-bold ml-5 mt-5 ">
        Hello world!
    </h1>

    <ul>
        @foreach ($posts as $post)
            <li class="flex items-center mb-5">
                <span class="w-1/5"></span>
                <p class="w-2/5">{{ $post->content }}</p>
                <div class="w-1/5 flex">
                    <a href="{{ url('/posts/' . $post->id) }}"
                        class="rounded-md bg-indigo-500 text-white p-2 ">Update</a>
                    <form action="{{ url('/posts/' . $post->id) }}" method="POST"
                        class="p-2 ml-2 rounded-md bg-red-500 text-white">
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>

</body>

</html>
