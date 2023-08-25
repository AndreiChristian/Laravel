<x-layout>
    <div class="max-w-md mx-auto mt-10 bg-white p-8 rounded-xl shadow-md">
        <h1 class="text-2xl font-bold mb-4">Create New Post</h1>

        <form action="{{route('posts.store')}}" method="post" class="space-y-4">
            @csrf

            <div class="space-y-2">
                <label for="title" class="block text-sm font-medium">Title:</label>
                <input type="text" id="title" name="title" required class="w-full p-2 border rounded-md">
            </div>

            <div class="space-y-2">
                <label for="body" class="block text-sm font-medium">Content:</label>
                <textarea id="body" name="body" required rows="4" class="w-full p-2 border rounded-md"></textarea>
            </div>

            <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white p-2 rounded-md">Create Post</button>
        </form>
    </div>
</x-layout>

