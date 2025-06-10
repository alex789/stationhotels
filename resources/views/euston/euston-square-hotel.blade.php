@extends('layouts.default')

@section('content')

@section('logo', 'Euston Station Hotels')


<x-content-layout class="hotel">
    <x-markdown>
        {!! Blade::render(File::get(resource_path('markdown/euston/euston-square-hotel.md'))) !!}
    </x-markdown>
</x-content-layout>  


@endsection