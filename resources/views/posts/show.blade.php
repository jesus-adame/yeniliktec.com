@extends('layouts.app')

@section('title', $post->title . ' | ' . $post->category->name . ' - YenilikTec')

@section('meta')
    <meta name="description" content="{{ $post->excerpt }}">
    <meta name="robots" content="index, follow">
@endsection

@section('content')
<div class="container mx-auto my-10">
    <div class="flex flex-wrap justify-between">
        <div class="flex justify-center items-center w-full banner" style="height: 100px;">
            <header>
                <h1 class="text-white text-3xl uppercase">{{ $post->title }}</h1>
            </header>
        </div>
        <div class="lg:w-2/3">
            <article class="shadow px-6 pt-6 pb-8">
                @if (session('status'))
                    <div class="py-2 px-4 mb-4 bg-green-300 text-green-900">{{ session('status') }}</div>
                @endif
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
                                <a class="inline-block w-10 text-yellow-600 bg-yellow-200 hover:bg-yellow-300 shadow p-2 rounded" href="{{ route('posts.edit', [ 'post' => $post->id ]) }}">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pen" class="svg-inline--fa fa-pen" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M290.74 93.24l128.02 128.02-277.99 277.99-114.14 12.6C11.35 513.54-1.56 500.62.14 485.34l12.7-114.22 277.9-277.88zm207.2-19.06l-60.11-60.11c-18.75-18.75-49.16-18.75-67.91 0l-56.55 56.55 128.02 128.02 56.55-56.55c18.75-18.76 18.75-49.16 0-67.91z"/></svg>
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

            <section class="mt-4 py-4">
                <h4 class="mb-4">Comentarios ({{ $post->comments->count() }})</h4>
                @auth
                    <form class="mb-4" action="{{ route('comments.store') }}" method="post">
                        <div class="flex">
                            <div class="icon flex w-20">
                                <img class="h-14 w-14 rounded-full object-cover mr-4" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                            </div> 
                            <div class="content w-full">
                                <input type="hidden" value="{{ $post->id }}" name="post_id">
                                @csrf
                                <label class="hidden" for="message">Mensaje</label>
                                <textarea id="commentEditor" class="w-full" name="message" placeholder="Mensaje..."></textarea>
                                @error('message')
                                <p class="text-red-500">{{ $message }}</p>
                                @enderror
                                <button class="bg-blue-600 hover:bg-blue-700 text-white mt-4 py-2 px-5">Enviar</button>    
                            </div>
                        </div>
                    </form>
                @endauth
                <hr class="mb-8">
                @foreach ($post->comments->sortByDesc('created_at') as $comment)
                    <div class="shadow py-4 px-8 rounded-xl bg-gray-50 mb-4">
                        <p class="mb-2 font-bold flex items-center">
                            <img class="inline-block h-14 w-14 rounded-full shadow object-cover mr-4" src="{{ $comment->user->profile_photo_url }}" alt="{{ $comment->user->name }}" />
                            {{ $comment->user->name }}
                            @auth
                                @if (Auth::user()->id == $comment->user_id)
                                    <a href="{{ route('comments.edit', ['comment' => $comment->id]) }}" class="inline-block ml-2 w-8 text-yellow-600 bg-yellow-200 hover:bg-yellow-300 shadow p-2 rounded">
                                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pen" class="svg-inline--fa fa-pen" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M290.74 93.24l128.02 128.02-277.99 277.99-114.14 12.6C11.35 513.54-1.56 500.62.14 485.34l12.7-114.22 277.9-277.88zm207.2-19.06l-60.11-60.11c-18.75-18.75-49.16-18.75-67.91 0l-56.55 56.55 128.02 128.02 56.55-56.55c18.75-18.76 18.75-49.16 0-67.91z"/></svg>
                                    </a>
                                @endif
                            @endauth
                        </p>
                        <div class="py-2">
                            {!! $comment->content !!}
                        </div>
                        <small>{{ $comment->created_at->diffForHumans() }}</small>
                    </div>
                @endforeach

                @if ($post->comments->count() < 1)
                    <div class="shadow py-4 px-8 rounded-xl bg-gray-50 mb-4">
                        <p class="text-gray-600 font-bold">Sin comentarios</p>
                    </div>    
                @endif
            </section>
        </div>
        <div class="lg:w-1/3 px-4">
            @include('shared.sidebar')
        </div>
    </div>
</div>
@endsection