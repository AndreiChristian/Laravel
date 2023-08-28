<x-layout>
    <form action="{{ route('book.store') }}" method="POST" class="text-black">
        @csrf
        <input type="text" name="title" placeholder="Book Title" class="">
        <br />

        <!-- Publisher Dropdown -->
        <select name="publisher_id">
            @foreach($publishers as $publisher)
            <option class="text-black" value="{{ $publisher->id }}">{{ $publisher->name }}</option>
            @endforeach
        </select>
        <br />

        <!-- Authors Multi-Select -->
        <select name="author_ids[]" multiple class="text-black">
            @foreach($authors as $author)
            <option class="text-black" value="{{ $author->id }}">{{ $author->first_name }}</option>
            @endforeach
        </select>

        <button type="submit">Create Book</button>
    </form>
</x-layout>
