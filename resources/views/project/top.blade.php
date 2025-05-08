<x-app-layout>
    <div class="items-center py-6 border-b-4 border-gray-500 rounded-md">
        <div class="text-6xl text-zinc-400 font-extrabold text-center">
            <p>Freige</p>
        </div>
    </div>

    <div class="py-6 rounded-md">
        <div class="text-2xl text-zinc-400 font-bold px-36 py-3.5">
            <p>余っている食材からレシピを検索！</p>
        </div>

        <form action="{{ route('search') }}" method="get" class="">
            @csrf
            <div class="flex flex-row pl-40 items-center gap-x-4">
                <div class="w-1/3">
                    <input type="text" name="ingredient" placeholder="食材をここに入力" class="text-sm text-zinc-500 border border-gray-400 rounded-lg w-full" />
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
    </div>
</x-app-layout>
