<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('投稿一覧') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="mb-6 flex justify-end">
                <a href="{{ route('post.create') }}"
                   class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                    新規投稿
                </a>
            </div>

            <div class="space-y-4">
                @foreach ($posts as $post)
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6">

                            <h3 class="text-lg font-semibold text-gray-900 mb-2">
                                {{ $post->title }}
                            </h3>

                            <p class="text-gray-600 whitespace-pre-line">
                                {{ $post->content }}
                            </p>

                            <div class="mt-4 text-sm text-gray-500">
                                投稿者：{{ $post->user->name }}
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
</x-app-layout>