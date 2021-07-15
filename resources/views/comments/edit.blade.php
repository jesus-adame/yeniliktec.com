@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <form class="my-4" action="{{ route('comments.update', [ $comment->id ]) }}" method="post">
            <div class="flex">
                <div class="icon flex w-20">
                    <img class="h-14 w-14 rounded-full object-cover mr-4" src="{{ $comment->user->profile_photo_url }}" alt="{{ $comment->user->name }}" />
                </div>
                
                <div class="content w-full">
                    @csrf @method('put')
                    <label class="hidden" for="message">Mensaje</label>
                    <textarea id="commentEditor" class="w-full" name="message" placeholder="Mensaje...">{{ $comment->content }}</textarea>
                    @error('message')
                    <p class="text-red-500">{{ $message }}</p>
                    @enderror
                    
                    <button class="bg-yellow-400 hover:bg-yellow-500 text-white mt-4 py-2 px-4">Actualizar</button>
                </div>
            </div>
        </form>
        <form class="my-4" action="{{ route('comments.destroy', [$comment->id]) }}" method="post">
            @csrf @method('delete')
            <div class="flex">
                <div class="w-20"></div>
                <button class="bg-red-600 hover:bg-red-700 text-white mt-4 py-2 px-4" type="submit">Eliminar</button>
            </div>
        </form>
    </div>
@endsection