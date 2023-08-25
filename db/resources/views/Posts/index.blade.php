<x-layout>

    <h1 class="m-7 text-5xl italic text-zinc-900">All posts</h1>

    <div class="box-border p-4 mx-auto flex items-center justify-start gap-4 ">
        @foreach($posts as $post)
        <div class="bg-zinc-50 p-4 w-64 h-64 rounded-md shadow-md flex flex-col items-center justify-between">
            <h1 class="text-xl"><a href="{{route('posts.show',$post)}}">{{$post->title}}</a></h1>
            <p>{{$post->created_at->diffForHumans()}}</p>
            <p class="text-zinc-400">{{$post->body}}</p>
            <a href="{{ route('posts.edit', $post) }}" class="p-2 rounded-md shadow-md text-white bg-blue-500 w-full text-center">Edit</a>
            <form action="{{ route('posts.destroy', $post) }}" method="POST" class="w-full">
                @csrf
                @method('DELETE')
                <button type="submit" class="p-2 rounded-md shadow-md text-white bg-red-500 w-full" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
        </div>
        @endforeach
    </div>

</x-layout>
