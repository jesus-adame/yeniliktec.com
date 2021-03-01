@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <form class="my-8" action="{{ route('posts.store') }}" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
            <h1 class="text-3xl mb-4">Publicar entrada</h1>
            @csrf
            
            <div class="flex justify-between">
                <div class="w-full md:w-2/3 pr-4">
                    <label class="mb-2" for="title">Título</label>
                    <input class="w-full mb-2" type="text" name="title" value="{{ old('title') }}">
                    @error('title')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
        
                    <label class="mb-2" for="excerpt">Estracto</label>
                    <input class="w-full mb-8" type="text" name="excerpt" value="{{ old('excerpt') }}">
                    @error('excerpt')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
        
                    <label class="hidden" for="content">Contenido</label>
                    <textarea id="editor" class="mb-2" name="content">{{ old('content') }}</textarea>
                    @error('content')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <div class="md:w-1/3 pl-4">
                    <button class="w-full mt-2 py-2 px-4 bg-green-500 hover:bg-green-400 text-white" type="submit">
                        Publicar
                    </button>
                    <div class="mt-4">
                        <label class="block mb-2" for="category_id">Categoría</label>
                        <select class="w-full mb-4" name="category_id" value="{{ old('category_id') }}">
                            <option value="">- Elegir -</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror

                        <label class="block mb-2" for="image">Imagen</label>
                        <input class="w-full border p-3 mb-5" type="file" name="image">
                        @error('image')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
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