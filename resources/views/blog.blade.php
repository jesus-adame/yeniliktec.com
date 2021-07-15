@extends('layouts.app')

@section('title', 'Blog - YenilikTec')

@section('meta')
<meta name="description" content="YenilikTec - Blog y noticias de marketing digital, desarrollo web y tecnologías.">
<meta name="robots" content="index, follow">
@endsection

@section('content')
    @include('components.breadcrumb')

    <div class="container m-auto my-10">
        <div class="flex flex-wrap justify-between">
            <div class="lg:w-2/3 px-4">
                @foreach ($posts as $post)
                    <div class="post shadow p-4 mb-5">
                        <a class="flex flex-wrap items-center justify-between" href="{{ route('posts.show', ['slug' => $post->slug]) }}">
                            <div class="md:w-2/3">
                                <h2 class="my-3 hover:underline">{{ $post->title }}</h2>
                                <p class="mb-4">{{ $post->user->name }}</p>
                                <p>{{ $post->excerpt }}</p>
                                <p>{{ $post->created_at->locale('es_MX')->diffForHumans() }}</p>
                            </div>
                            <img class="md:w-1/3" src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}">
                        </a>
                    </div>
                @endforeach
                @if (count($posts) < 1)
                    <div class="bg-yellow-200 p-4 my-5 border-l-4 border-yellow-600">
                        <p class="text-yellow-600 font-bold">Sin entradas</p>
                    </div>
                @endif
                {{ $posts->links() }}
            </div>
            <div class="lg:w-1/3 px-4">
                @include('shared.sidebar')
            </div>
        </div>
    </div>
@endsection