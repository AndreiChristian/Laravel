<x-layout title="Edit author">
    <h1 class="ml-10 text-2xl">Create new author</h1>
    <form method="POST" action="{{route('author.update',$author)}}" class="ml-10 mt-10">
        @csrf
        @method('PUT')
        <label for="first_name">First Name</label>
        <br />
        <input value="{{$author->first_name}}" type="text" id="first_name" name="first_name" class="text-black" />
        <br />
        <label for="last_name">Last Name</label>
        <br />
        <input value="{{$author->last_name}}" type="text" id="last_name" name="last_name" class="text-black" />
        <br />
        <button type="submit" class="bg-zinc-200 text-black p-2 rounded-md mt-10  ">Create </button>
    </form>
</x-layout>
