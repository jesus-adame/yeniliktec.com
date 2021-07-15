@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <form class="lg:w-1/3 mx-auto" action="{{ route('categories.store') }}" method="post">
            <h1 class="my-5">Registrar</h1>
            @csrf
            <label class="mb-2" for="name">Nombre</label>
            <input class="w-full mb-2" type="text" name="name">

            <button class="py-2 px-4 bg-green-500 text-white" type="submit">Registrar</button>
        </form>
    </div>
@endsection