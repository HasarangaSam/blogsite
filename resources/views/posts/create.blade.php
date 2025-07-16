<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create New Post
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="mb-4">
                    <label class="block font-medium text-sm text-gray-700">Title</label>
                    <input type="text" name="title" class="w-full border-gray-300 rounded-md shadow-sm">
                </div>

                <div class="mb-4">
                    <label class="block font-medium text-sm text-gray-700">Content</label>
                    <textarea name="content" class="w-full border-gray-300 rounded-md shadow-sm" rows="5"></textarea>
                </div>

                <div class="mb-4">
                    <label class="block font-medium text-sm text-gray-700">Featured Image</label>
                    <input type="file" name="image" accept="image/*" class="w-full border-gray-300 rounded-md shadow-sm">
                </div>

                <div>
                    <button type="submit" class="bg-red-600 hover:bg-green-700 text-white font-semibold px-4 py-2 rounded-md shadow">
                        Publish Post
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
