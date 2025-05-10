<x-app-layout>
    <div class="text-2xl text-zinc-400 font-medium px-10 py-8 mx-52 flex">
        <p>{{ $recipe->recipe_title }}</p>
        <p>のレビュー登録</p>
    </div>

    <form action="{{ route('review.post', ['recipe' => $recipe->recipe_id]) }}" method="POST">
        @csrf
        <div class="text-zinc-500 px-12 py-8 mx-52 flex items-center justify-center gap-x-4">
            <div class="w-3/5">
                <label class="block" for="comment">レビューを書いてね！！</label>
                <textarea class="p-2 w-full" id="comment" name="comment"></textarea>
            </div>
            <div class="">
                <button type="submit" class="border-2 border-gray-500 rounded-lg p-1 hover:bg-yellow-50">送信</button>
            </div>
        </div>
    </form>

    <div class="text-xl text-zinc-500 font-medium text-center px-10 py-8 mx-52">
        <p>レビューしてくれてありがとう！</p>
    </div>
</x-app-layout>