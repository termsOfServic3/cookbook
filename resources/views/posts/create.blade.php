<x-layout>
    @if(session('success_message'))
        <div class="bg-green-200 text-green-800 px-4 py-2">
            {{session('success_message')}}
        </div>
    @endif
    @if(count($errors) > 0)
        <div class="bg-red-200 text-red-800 px-4 py-2">
            <ul class="list-disc ml-4">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="bg-white shadow-md rounded-md px-6 py-6 my-8">
        <div>
            <h2 class="text-2xl font-semibold">Create Post</h2>
            <form action="/posts/create" method="POST" class="max-w-2xl mt-4">
                @csrf
                <div class="mt-4 ml-4">
                    <label for="title" class="font-semibold block">Title</label>
                    <input type="text" name="title" id="title" class="border
          border-gray-400 rounded w-full px-2 py-2 mt-2" required>
                </div>
                <div class="mt-4 ml-4">
                    <label for="body" class="font-semibold block p-1">Content</label>
                    <textarea name="body" id="body" class="border border-gray-400
              rounded w-full h-64 resize-none pl-2" required></textarea>
                </div>
                <div class="mt-6 ml-4">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                        Update Announcement
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
