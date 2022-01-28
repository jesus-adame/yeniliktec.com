<div class="categories p-4">
    <p class="uppercase text-gray-500 mb-3">Categorías</p>
    <hr>
    @foreach (\App\Models\Category::all() as $category)
        <a class="block hover:underline py-2" href="{{ route('categories.show', ['category' => $category->slug]) }}">
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
    <iframe width="540" height="535" src="https://9614c79c.sibforms.com/serve/MUIEAHx4URRyFbr4kqNM2edAAuIFy-1Bs-Ea_rOpW5r2u39EaVgRWEzEOlb5RvctYUbDGx8ZzAepuRmOf_FWNjc8maD3lLocC0cxAEatKmRlpm-ukQZ21g0yVl2fCS8EFy4nRHvLi4OJaMODCJ1cMggKr_My4Wtk2nN_FB1aoaFWWHO_ndWwyf8Dst5qWcetyHl-KaKu8hkrAPOq" frameborder="0" scrolling="auto" allowfullscreen style="display: block;margin-left: auto;margin-right: auto;max-width: 100%;"></iframe>
</div>