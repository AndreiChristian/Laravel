<x-layout title='home'>
    <h1 class="ml-10">Publisher</h1>
    @foreach($publishers as $publisher)
    <div class="box-border mx-10 border-solid border-zinc-500 border-2 rounded-md p-4 my-4 flex items-center justify-between gap-4">
        <span>{{$publisher->name}}</span>
        <span class="flex-1"></span>
        <a href="{{route('publisher.edit',$publisher)}}">Edit</a>
        <form method="POST" action="{{route('publisher.destroy',$publisher)}}">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-500 p-2 rounded-md text-white">Delete</button>
        </form>
    </div>
    @endforeach
</x-layout>
