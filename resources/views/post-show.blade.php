<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('投稿詳細') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">

                    <h3 class="text-2xl font-semibold text-gray-900 mb-4">
                        {{ $post->title }}
                    </h3>

                    <p class="text-gray-700 whitespace-pre-line">
                        {{ $post->content }}
                    </p>

                    <div class="mt-6 text-sm text-gray-500">
                        投稿者：{{ $post->user->name }}
                        <br>
                        投稿日：{{ $post->created_at }}
                    </div>

                    <div class="mt-6 flex items-center gap-4">
                        <a href="{{ route('post.index') }}"
                           class="text-sm text-gray-600 hover:text-gray-900">
                            一覧に戻る
                        </a>

                        <a href="{{ route('post.edit', $post) }}"
                           class="px-4 py-2 bg-gray-800 text-white rounded-md hover:bg-gray-700">
                            編集
                        </a>
                        <form method="POST" action="{{ route('post.destroy', $post) }}" onsubmit="return confirm('本当に削除しますか？');">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-500">
                                削除
                            </button>
                    </div>

                </div>
            </div>

        </div>
    </div>
</x-app-layout>