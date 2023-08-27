<x-layout title="Author List">
    <h1 class="ml-10 text-2xl">Author List</h1>
    <a class="ml-10 underline" href="{{route('author.create')}}">Create a new author</a>
    @foreach($authors as $author)
    <div class="box-border mx-10 border-solid border-zinc-500 border-2 rounded-md p-4 my-4 flex items-center justify-between gap-4">
        <p class="ml-10 text-2xl">{{$author->first_name . " " . $author->last_name}}</p>
        <span class="flex-1"></span>
        <a href="{{route('author.edit',$author)}}">Edit</a>
        <form method="POST" action="{{route('author.destroy',$author)}}">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-500 p-2 rounded-md text-white">Delete</button>
        </form>
    </div>
    @endforeach
</x-layout>
