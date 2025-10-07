<!-- レシピ詳細画面 -->
<x-app-layout>
    <div class="text-zinc-500 border-b-2 border-gray-400 px-10 py-8 mx-52">
        <div class="flex justify-between gap-x-1">
            <div class="bg-yellow-50 border border-amber-300 flex flex-col justify-center px-4 mt-8">
                <div class="text-2xl font-medium">
                    <p>{{ $recipe->recipe_title }}</p>
                </div>
                <div class="text-xl ml-6 mt-3">
                    <p>ランキング：{{ $recipe->rank }}位</p>
                </div>
            </div>
            <div class="">
                <img src="{{ $recipe->image_url }}" class="size-60">
            </div>
        </div>
    </div>

    <!-- レシピ詳細 -->
    <div class="text-zinc-500 border-b-2 border-gray-400 px-12 py-8 mx-52">
        <!-- 材料一覧 -->
        <div class="text-2xl font-medium">
            <p>材料</p>
        </div>
        <div class="mx-8 my-6">
            @foreach($recipe['recipe_material'] as $material)
            <div class="mb-1">
                <p>{{ $material }}</p>
            </div>
            @endforeach
        </div>

        <!-- 楽天レシピへのURL -->
        <div class="flex flex-col">
            <div class="text-xl flex justify-end">
                <div class="">
                    <p>詳しい調理方法は</p>
                </div>
                <div class="text-blue-400 underline">
                    <a href="{{ $recipe->recipe_url }}">こちら</a>
                </div>
            </div>
            <div class="text-right">
                <p>※楽天レシピに飛びます</p>
            </div>
        </div>
    </div>

    <!-- レビュー関係 -->
    <div class="text-zinc-500 px-12 py-8 mx-52">
        <div class="">
            <div class="text-2xl font-medium">
                <p>レビュー</p>
            </div>
            <!-- レビュー一覧 -->
            <div class="mx-8 my-6">
                @foreach ($reviews as $review)
                <div class="bg-yellow-50 border-2 border-gray-100 mb-4">
                    <div class="p-4">
                        <p class="text-xl">{{ $review->user_name }}</p>
                        <p class="mx-2 my-1">{{ $review->comment }}</p>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- reviewcreateへの遷移 -->
            <div class="text-xl flex justify-end">
                <div class="">
                    <p>レビュー作成は</p>
                </div>
                <div class="text-blue-400 underline">
                    <a href="{{ route('review.create', ['recipe' => $recipe['recipe_id']]) }}">こちら</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>