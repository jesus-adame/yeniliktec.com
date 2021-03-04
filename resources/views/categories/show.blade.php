@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-3xl my-10">Categoría: {{ $category->name }}</h1>

        <div class="flex justify-between">
            <div class="w-2/3">
                @foreach ($category->posts as $post)
                    <div class="post shadow p-4 mb-5">
                        <a class="flex items-center justify-between" href="{{ route('posts.show', [$post->slug]) }}">
                            <div class="content">
                                <h2 class="my-3">{{ $post->title }}</h2>
                                <p class="mb-4">{{ $post->user->name }}</p>
                                <p>{{ $post->excerpt }}</p>
                                <p>{{ $post->created_at->locale('es_MX')->diffForHumans() }}</p>
                            </div>
                            <img class="w-1/3" src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}">
                        </a>
                    </div>
                @endforeach
                @if (count($category->posts) < 1)
                    <div class="bg-yellow-200 p-4 my-5 border-l-4 border-yellow-600">
                        <p class="text-yellow-600 font-bold">Sin entradas</p>
                    </div>
                @endif
            </div>
            @include('shared.sidebar')
        </div>
    </div>
@endsection