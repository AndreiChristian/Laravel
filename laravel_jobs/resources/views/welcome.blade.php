<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    @vite('resources/css/app.css')
</head>

{{-- <h1 class="text-4xl">The value is {{ $value }}</h1>

@if ($value === 1)
    <h1>The value is 1</h1>
@elseif ($value > 1)
    <h1>The value is greater than 1</h1>
@else
    <h1>The value is smaller than 1</h1>
@endif

@auth
    // The user is authenticated...
@endauth

@guest
    // The user is not authenticated...
@endguest

@for ($i = 0; $i < 10; $i++)
    <p> The current value is {{ $i }} </p>
@endfor --}}


@include('shared.header-one', ['title' => 'Blade'])

<x-alert :message="'I am a component'"></x-alert>

</html>
