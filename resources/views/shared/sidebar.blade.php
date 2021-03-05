<div class="categories p-4">
    <p class="uppercase text-gray-500 mb-3">Categorías</p>
    <hr>
    @foreach (\App\Models\Category::all() as $category)
        <a class="block hover:underline py-2" href="{{ route('categories.show', [$category->slug]) }}">
            {{ $category->name }}
        </a>
    @endforeach
</div>
<div class="lastest p-4">
    <p class="uppercase text-gray-500 mb-3">Últimas entradas</p>
    <hr>
    <a class="block hover:underline py-2" href="{{ route('blog') }}">Todas las entradas</a>
    @foreach (\App\Models\Post::orderByDesc('created_at')->take(5)->get() as $post)
        <a class="block hover:underline py-2" href="{{ route('posts.show', [$post->slug]) }}">
            {{ $post->title }}
        </a>
    @endforeach
</div>