<!-- トップ画面 -->
<x-app-layout>
    <!-- タイトル -->
    <div class="items-center py-6 border-b-4 border-gray-500 rounded-md">
        <div class="text-6xl text-zinc-400 font-extrabold text-center">
            <p>Freige</p>
        </div>
    </div>

    <!-- 検索ボックス -->
    <div class="mx-32 mt-10 pb-12 border-b-2 border-gray-400 ">
        <div class="text-3xl text-zinc-400 font-bold mx-20 my-5">
            <p>余っている食材からレシピを検索！</p>
        </div>

        <form action="{{ route('search') }}" method="get" class="">
            @csrf
            <div class="flex flex-row mx-28 items-center gap-x-5">
                <div class="w-2/5">
                    <input type="text" name="ingredient" placeholder="食材をひとつここに入力" class="text-sm text-zinc-500 border border-gray-400 rounded-lg w-full" />
                </div>
                <div class="w-1/12">
                    <button type="submit" class="text-zinc-500 border-2 border-gray-500 flex items-center justify-center p-1 rounded-lg w-full hover:bg-yellow-50">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                        </svg>
                    </button>
                </div>
            </div>
        </form>
        <div class="mx-28 mt-5">
            <p class="text-base text-red-500">{{ $errors->first('ingredient') }}</p>
        </div>
    </div>

    <div class="mx-32 my-10">
        <!-- 閲覧履歴 -->
        <div class="mx-16 mt-10">
            <p class="text-2xl text-zinc-400 font-medium mb-6">閲覧履歴</p>
            <div class="flex gap-x-8">
                @foreach ($recipeHistories as $recipeHistory)
                <a href="{{ route('search.show', ['recipe' => $recipeHistory['recipe_id']]) }}" class="bg-yellow-50 w-80 h-56 shadow-sm rounded-md hover:shadow-md">
                    <div class="p-5 w-full flex flex-col gap-y-3 items-center text-center">
                        <p class="text-zinc-500">{{ $recipeHistory['recipe_title'] }}</p>
                        <img src="{{ $recipeHistory['image_url'] }}" class="size-32">
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>