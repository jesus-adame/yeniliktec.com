@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <form class="my-8 mx-auto" action="{{ route('posts.update', [ 'post' => $post->id ]) }}" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
        <h1 class="text-3xl mb-4">{{ $post->title }}</h1>
        @csrf @method('put')

        <div class="flex flex-wrap justify-between">
            <div class="w-full md:w-2/3 pr-4">
                <label class="block mb-2" for="title">Título</label>
                <input class="w-full mb-2" type="text" name="title" value="{{ $post->title }}">
                @error('title')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
    
                <label class="block mb-2" for="excerpt">Estracto</label>
                <input class="w-full mb-8" type="text" name="excerpt" value="{{ $post->excerpt }}">
                @error('excerpt')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
    
                <label class="hidden" for="content">Contenido</label>
                <textarea id="editor" class="mb-2" name="content">{{ $post->content }}</textarea>
                @error('content')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror
            </div>
    
            <div class="w-full md:w-1/3 pl-4">
                <button class="w-full mt-2 py-2 px-4 bg-yellow-400 hover:bg-yellow-300" type="submit">Actualizar</button>
                <a href="{{ route('posts.show', ['post' => $post->id ]) }}" class="mt-2 py-2 px-4 bg-gray-500 hover:bg-gray-400 text-white block text-center">
                    Cancelar
                </a>

                <div class="category my-4">
                    <label class="block mb-2" for="category_id">Categoría</label>
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
                </div>

                <div class="image">
                    <label class="mb-2" for="image">Imagen</label>
                    <img class="w-40 my-2" src="{{ Storage::url($post->image) }}" alt="{{ $post->name }}">
                    <input class="w-full border p-3 mb-5" type="file" name="image">
                    @error('image')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <form action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="post">
                    <button class="ml-auto mt-2 py-2 px-4 bg-red-500 hover:bg-red-400 text-white" type="submit">
                        Eliminar
                    </button>
                </form>
            </div>
        </div>
    </form>
</div>
<style>
    .ck-editor__editable_inline {
        min-height: 300px;
    }
</style>
@endsection