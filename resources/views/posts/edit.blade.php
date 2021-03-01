@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <form class="my-10 lg:w-1/2 mx-auto" action="{{ route('posts.update', [ 'post' => $post->id ]) }}" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
        <h1 class="text-3xl mb-4">{{ $post->title }}</h1>
        @csrf @method('put')

        <label class="mb-2" for="title">Título</label>
        <input class="w-full" type="text" name="title" value="{{ $post->title }}">
        @error('title')
            <p class="text-red-500">{{ $message }}</p>
        @enderror

        <label class="mb-2" for="slug">Slug</label>
        <input class="w-full" type="text" name="slug" value="{{ $post->slug }}">
        @error('slug')
            <p class="text-red-500">{{ $message }}</p>
        @enderror

        <label for="category_id">Categoría</label>
        <select class="w-full" name="category_id">
            <option value="">- Elegir -</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" @if ($post->category_id == $category->id) selected @endif>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>
        @error('category_id')
            <p class="text-red-500">{{ $message }}</p>
        @enderror

        <label class="mb-2" for="excerpt">Estracto</label>
        <input class="w-full" type="text" name="excerpt" value="{{ $post->excerpt }}">
        @error('excerpt')
            <p class="text-red-500">{{ $message }}</p>
        @enderror

        <label class="mb-2" for="image">Imagen</label>
        <img class="w-40 my-2" src="{{ Storage::url($post->image) }}" alt="{{ $post->name }}">
        <input class="w-full border p-3 mb-5" type="file" name="image">
        @error('image')
            <p class="text-red-500">{{ $message }}</p>
        @enderror

        <label class="mb-2 hidden" for="content">Contenido</label>
        <textarea id="editor" class="w-full mb-2" name="content" rows="4">{{ $post->content }}</textarea>
        @error('content')
            <p class="text-red-500">{{ $message }}</p>
        @enderror

        <button class="w-full mt-2 py-2 px-4 bg-yellow-400" type="submit">Actualizar</button>
        <a class="w-full mt-2 py-2 px-4 bg-gray-400 block text-center" href="{{ route('posts.show', ['post' => $post->id ]) }}">Cancelar</a>
        <form action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="post">
            <button class="w-full mt-2 py-2 px-4 bg-red-500 text-white" type="submit">Eliminar</a>
        </form>
    </form>

</div>
@endsection