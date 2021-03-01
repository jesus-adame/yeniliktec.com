<div class="w-1/3 px-4">
    <div class="categories p-4">
        <h3 class="uppercase text-gray-500 mb-4">Categorías</h3>
        <hr>
        @foreach (\App\Models\Category::all() as $category)
            <a class="block hover:underline py-2 px-4" href="{{ route('categories.show', [ 'category' => $category->id ]) }}">
                {{ $category->name }}
            </a>
        @endforeach
    </div>
    <div class="lastest p-4">
        <h3 class="uppercase text-gray-500 mb-4">Últimas entradas</h3>
        <hr>
        <a class="block hover:underline py-2 px-4" href="{{ route('blog') }}">Todas las entradas</a>
        @foreach (\App\Models\Post::orderByDesc('created_at')->take(3)->get() as $post)
            <a class="block hover:underline py-2 px-4" href="{{ route('posts.show', [ 'post' => $post->id ]) }}">
                {{ $post->title }}
            </a>
        @endforeach
    </div>
</div>