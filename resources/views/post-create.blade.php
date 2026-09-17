<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('新規投稿') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">

                    <form method="POST" action="{{ route('post.store') }}">
                        @csrf

                        {{-- タイトル --}}
                        <div>
                            <label for="title"
                                   class="block font-medium text-sm text-gray-700">
                                タイトル
                            </label>

                            <input
                                id="title"
                                type="text"
                                name="title"
                                value="{{ old('title') }}"
                                required
                                autofocus
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                            >

                            @error('title')
                                <p class="mt-2 text-sm text-red-600">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        {{-- 本文 --}}
                        <div class="mt-4">
                            <label for="content"
                                   class="block font-medium text-sm text-gray-700">
                                本文
                            </label>

                            <textarea
                                id="content"
                                name="content"
                                rows="8"
                                required
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                            >{{ old('content') }}</textarea>

                            @error('content')
                                <p class="mt-2 text-sm text-red-600">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        {{-- ボタン --}}
                        <div class="mt-6 flex items-center gap-4">

                            <a href="{{ route('post.index') }}"
                               class="text-sm text-gray-600 hover:text-gray-900">
                                戻る
                            </a>

                            <button
                                type="submit"
                                class="px-4 py-2 bg-gray-800 text-white rounded-md hover:bg-gray-700"
                            >
                                投稿する
                            </button>

                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</x-app-layout>