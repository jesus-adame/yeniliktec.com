@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <form class="my-10 lg:w-1/2 mx-auto" action="{{ route('posts.store') }}" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
            <h1 class="text-3xl mb-4">Publicar entrada</h1>
            @csrf

            <label class="mb-2" for="title">Título</label>
            <input class="w-full" type="text" name="title" value="{{ old('title') }}">
            @error('title')
                <p class="text-red-500">{{ $message }}</p>
            @enderror

            <label class="mb-2" for="slug">Slug</label>
            <input class="w-full" type="text" name="slug" value="{{ old('slug') }}">
            @error('slug')
                <p class="text-red-500">{{ $message }}</p>
            @enderror

            <label for="category_id">Categoría</label>
            <select class="w-full" name="category_id" value="{{ old('category_id') }}">
                <option value="">- Elegir -</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category_id')
                <p class="text-red-500">{{ $message }}</p>
            @enderror

            <label class="mb-2" for="excerpt">Estracto</label>
            <input class="w-full" type="text" name="excerpt" value="{{ old('excerpt') }}">
            @error('excerpt')
                <p class="text-red-500">{{ $message }}</p>
            @enderror

            <label class="mb-2" for="image">Imagen</label>
            <input class="w-full border p-3 mb-5" type="file" name="image">
            @error('image')
                <p class="text-red-500">{{ $message }}</p>
            @enderror

            <label class="mb-2 hidden" for="content">Contenido</label>
            <textarea id="editor" class="w-full mb-2" name="content" rows="4">{{ old('content') }}</textarea>
            @error('content')
                <p class="text-red-500">{{ $message }}</p>
            @enderror

            <button class="w-full mt-2 py-2 px-4 bg-green-500 text-white" type="submit">Publicar</button>
        </form>

        <script>
            ClassicEditor
                .create( document.querySelector( '#editor' ) )
                .catch( error => {
                    console.error( error );
                } );
        </script>
    </div>
@endsection