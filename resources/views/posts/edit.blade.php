<x-layout>
    @if(session('success_message'))
        <div class="bg-green-200 text-green-800 px-4 py-2">
            {{session('success_message')}}
        </div>
    @endif
    <form action="{{ route('posts.edit', ['id' => $posts->id])}}" method="POST"  class="bg-white rounded-md  shadow-md py-6 px-6 my-8">
        @csrf
        @method('PATCH')
        <div class="mt-4 ml-4">
            <label for="title" class="font-semibold block">Edit Posts</label>
            <input type="text" name="title" id="title" class="border
          border-gray-400 rounded w-full px-2 py-2 mt-2" value="{{
            $posts->title}}" required>
        </div>

        <div class="mt-6 ml-4">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                Update Post
            </button>
        </div>
    </form>

</x-layout>
