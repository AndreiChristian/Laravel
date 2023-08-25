<x-layout>
    <div class="bg-zinc-50 p-4 h-64 rounded-md shadow-md flex box-border mx-10 flex-col items-center justify-between">
        <h1 class="text-xl">{{$post->title}}</h1>
        <p>{{$post->created_at->diffForHumans()}}</p>
        <p class="text-zinc-400">{{$post->body}}</p>
        <a href="{{ route('posts.edit', $post) }}" class="  p-2 rounded-md shadow-md text-white bg-blue-500 w-40 text-center">Edit</a>
        <form action="{{ route('posts.destroy', $post) }}" method="POST" class="w-full flex justify-center items-center ">
            @csrf
            @method('DELETE')
            <button type="submit" class="p-2 rounded-md shadow-md text-white bg-red-500 w-40">Delete</button>
        </form>
    </div>
    <div class="bg-zinc-50 p-4 rounded-md shadow-md flex box-border mx-10 flex-col items-center justify-between">
        <form action="{{ route('comments.store', $post) }}" method="POST" class="w-full">
            @csrf
            <textarea name="body" required class="w-full p-2 rounded-md shadow-md"></textarea>
            <button type="submit" class="p-2 rounded-md shadow-md text-white bg-green-500 w-40 mt-2">Add Comment</button>
        </form>

        @foreach($post->comments as $comment)
        <div class="bg-white p-2 mt-2 w-full rounded-md shadow-md">
            <p class="text-zinc-400">{{ $comment->body }}</p>
            <p>{{$comment->created_at->diffForHumans()}}</p>
            <form action="{{route('comments.destroy',$comment)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="p-2 rounded-md shadow-md text-white bg-red-500 w-40">Delete</button>
            </form>
        </div>
        @endforeach
    </div>
</x-layout>
