@extends('layouts.app')

@section('content')
    <div class="container mx-auto">
        <div class="flex justify-between items-center">
            <h1 class="text-2xl my-5">Categorías</h1>
            <a class="py-2 px-4 bg-blue-700 text-white" href="{{ route('categories.create') }}">Registar</a>
        </div>

        @if (session('status'))
            <div class="bg-green-300 text-green-700 p-3 my-4">
                {{ session('status') }}
            </div>
        @endif

        <table class="w-full text-center my-10 shadow">
            <thead>
                <tr>
                    <th class="bg-gray-200 py-2">ID</th>
                    <th class="bg-gray-200 py-2">Nombre</th>
                    <th class="bg-gray-200 py-2">Registro</th>
                    <th class="bg-gray-200 py-2">Actualización</th>
                    <th class="bg-gray-200 py-2">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td class="bg-gray-100 py-2">{{ $category->id }}</td>
                        <td class="bg-gray-100 py-2">{{ $category->name }}</td>
                        <td class="bg-gray-100 py-2">{{ $category->created_at }}</td>
                        <td class="bg-gray-100 py-2">{{ $category->updated_at }}</td>
                        <td class="bg-gray-100 py-2">
                            <form action="{{ route('categories.destroy', [ 'category' => $category->id ]) }}" method="post">
                                @csrf @method('delete')
                                <button class="py-2 px-4 bg-red-400 text-white">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @if (count($categories) < 1)
            <div class="bg-yellow-200 text-yellow-600 p-3 my-4">
                No hay categorías registradas.
            </div>
        @endif
    </div>
@endsection