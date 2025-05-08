<x-app-layout>
    <div class="text-zinc-400 py-8 ml-36">
        <div class="text-3xl">
            <h1>検索結果</h1>
        </div>
        <div class="text-2xl mt-2.5 ml-7">
                <p>{{ $recipes[0]['ingredient'] }}から作れるレシピ</p>
        </div>
    </div>

    <div class="text-zinc-500 mx-64 pb-5">
        @foreach ($recipes as $recipe)
        <a href="{{ route('search.show', ['recipe' => $recipe['recipe_id']]) }}">
            <div class="bg-yellow-50 shadow-sm flex justify-between p-6 mb-8 gap-x-6 rounded-md hover:shadow-md">
                <div class="text-xl">
                        <h2>{{ $recipe['recipe_title'] }} </h2>
                </div>
                <div class="">
                    <img src="{{ $recipe['image_url'] }}" class="size-36">
                </div>
            </div>
        </a>
        @endforeach
    </div>
</x-app-layout>