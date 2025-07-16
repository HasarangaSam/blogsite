<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Post
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <form method="POST" action="{{ route('posts.update', $post) }}">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label class="block font-medium text-sm text-gray-700">Title</label>
                    <input type="text" name="title" value="{{ old('title', $post->title) }}" class="w-full border-gray-300 rounded-md shadow-sm">
                </div>

                <div class="mb-4">
                    <label class="block font-medium text-sm text-gray-700">Content</label>
                    <textarea name="content" class="w-full border-gray-300 rounded-md shadow-sm" rows="5">{{ old('content', $post->content) }}</textarea>
                </div>

                <div>
                    <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 text-white px-6 py-4 rounded-md shadow">
                        💾 Update Post
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
