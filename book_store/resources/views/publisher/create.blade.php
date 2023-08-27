<x-layout>
    <h1 class='ml-10 font-4xl font-bold'>Create new publisher</h1>
    <form method="POST" action="/{{'publisher'}}" class="ml-10 mt-10">
        @csrf
        <label for="name">Punlisher Name</label>
        <input type="text" id="name" name="name" class="text-black" />
        <br />
        <button type="submit" class="bg-zinc-200 text-black p-2 rounded-md mt-10  ">Create new publisher</button>
    </form>
</x-layout>
