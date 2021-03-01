@extends('layouts.app')

@section('content')
    <div class="container mx-auto my-10">
        <div class="flex flex-wrap justify-between">
            <article class="shadow px-6 pb-6 md:w-2/3">
                <header class="my-8">
                    <h1 class="text-4xl">{{ $post->title }}</h1>
                </header>
    
                <section>
                    <figure>
                        <img class="mx-auto" src="{{ Storage::url($post->image) }}" alt="{{ $post->title }}">
                    </figure>
                    <div class="flex items-center justify-between">
                        <div class="text-xl flex items-center my-8">
                            <img class="h-14 w-14 rounded object-cover mr-4" src="{{ $post->user->profile_photo_url }}" alt="{{ $post->user->name }}" />
                            <div class="info">
                                <p>{{ $post->user->name }}</p>
                                <p class="text-sm">{{ $post->created_at->format('d/m/Y') }}</p>
                            </div>
                        </div>
                        @auth
                            @if (Auth::user()->id == $post->user_id)
                                <a class="inline-block" href="{{ route('posts.edit', [ 'post' => $post->id ]) }}">
                                    <div class="w-8">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pen" class="svg-inline--fa fa-pen" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M290.74 93.24l128.02 128.02-277.99 277.99-114.14 12.6C11.35 513.54-1.56 500.62.14 485.34l12.7-114.22 277.9-277.88zm207.2-19.06l-60.11-60.11c-18.75-18.75-49.16-18.75-67.91 0l-56.55 56.55 128.02 128.02 56.55-56.55c18.75-18.76 18.75-49.16 0-67.91z"/></svg>
                                    </div>
                                    Editar
                                </a>
                            @endif
                        @endauth
                    </div>
                    <hr>
                    <p class="my-4">
                        {!! $post->content !!}
                    </p>
                </section>
            </article>

            <div class="md:w-1/3 px-4">
                @include('shared.sidebar')
            </div>
        </div>
    </div>
@endsection