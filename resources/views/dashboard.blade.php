<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            My Blog Posts
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('posts.create') }}" class="inline-block mb-4 bg-red-600 hover:bg-green-700 text-white px-4 py-2 rounded-md shadow">
                ➕ Create New Post
            </a>

            @if ($posts->count())
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    @foreach ($posts as $post)
                        <div class="p-6 border-b border-gray-200">
                            <h3 class="text-lg font-semibold">{{ $post->title }}</h3>
                                    @if ($post->image)
            <img src="{{ asset('storage/' . $post->image) }}" alt="Post Image" class="w-48 h-auto rounded shadow mt-2 mb-4">
        @endif
                            <p class="text-sm text-gray-600 mt-2">{{ Str::limit($post->content, 100) }}</p>
                            <div class="mt-4 flex gap-4">
                            <a href="{{ route('posts.edit', $post) }}" class="text-blue-600 hover:underline">✏️ Edit</a>

                            <form method="POST" action="{{ route('posts.destroy', $post) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline" onclick="return confirm('Are you sure?')">
                                    🗑️ Delete
                                </button>
                            </form>
                        </div>
                            <p class="text-xs text-gray-400 mt-2">Posted on {{ $post->created_at->format('M d, Y') }}</p>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-gray-600">You haven't written any posts yet.</p>
            @endif
        </div>
    </div>
</x-app-layout>

