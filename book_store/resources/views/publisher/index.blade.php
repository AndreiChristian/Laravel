<x-layout title='home'>
    <h1 class="ml-10">Publisher</h1>
    @foreach($publishers as $publisher)
    <div>
        <span>{{$publisher->name}}</span>
    </div>
    @endforeach
</x-layout>
