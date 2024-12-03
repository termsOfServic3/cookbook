<x-layout>
    <div class="bg-white shadow-md rounded-md px-6 py-6 my-8">
        <div>
            <h2 class="text-2xl font-semibold">Post</h2>


            @foreach($posts as $post)
                <div class="mt-4">
                    <a href="{{route('posts.edit', ['id' => $post->id])}}" class="font-semibold underline">{{ $post->title }}</a>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
