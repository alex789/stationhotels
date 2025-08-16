@extends('layouts.default')

@section('content')

@section('logo', 'Manchester Piccadilly Station Hotels')


<x-content-layout class="hotel">
    <x-markdown>
        {!! Blade::render(File::get(resource_path('markdown/manchester-piccadilly/mercure.md'))) !!}
    </x-markdown>
</x-content-layout>  


@endsection