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
           <h2 class="text-2xl font-semibold">Edit Announcement</h2>
      <form action="/announcement/update" method="POST" class="max-w-2xl mt-4" id="updateAnnouncement" enctype="multipart/form-data">
          @csrf
          @method('PATCH')
          <div class="ml-4 mt-4">
              <h4 class="font-semibold">is Active?</h4>
              <div class="mt-2">
              <div>
                  <input type="radio" name="isActive" id="isActiveYes" value="1" @checked($announcement->isActive) required>
                  <label for="isActiveYes">Yes</label>
              </div>
              <div>
                  <input type="radio" name="isActive" id="isActiveNo" value="0" @checked(!$announcement->isActive) required>
                  <label for="isActiveNo">No</label>
              </div>
          </div>
      </div>

      <div class="mt-4 ml-4">
              <label for="bannerText" class="font-semibold block">Banner Text</label>
              <input type="text" name="bannerText" id="bannerText" class="border
          border-gray-400 rounded w-full px-2 py-2 mt-2" value="{{
            $announcement->bannerText}}" required>
          </div>

          <div class="mt-4 ml-4">
              <label for="bannerText" class="font-semibold block">Banner Color</label>
              <input type="color" name="bannerColor" id="bannerColor"  value="{{
            $announcement->bannerColor}}" required>
          </div>

          <div class="mt-4 ml-4">
              <label for="titleText" class="font-semibold block">Title Text</label>
              <input type="text" name="titleText" id="titleText" class="border
          border-gray-400 rounded w-full px-2 py-2 mt-2"  value="{{
            $announcement->titleText}}" required>
          </div>

          <div class="mt-4 ml-4">
              <label for="titleColor" class="font-semibold block">Title Color</label>
              <input type="color" name="titleColor" id="titleColor" value="{{
            $announcement->titleColor}}" required>
          </div>

          <div class="mt-4 ml-4">
              <label for="content" class="font-semibold block p-1">Content</label>
              <textarea name="content" id="content" class=" hidden border border-gray-400
              rounded w-full h-64 resize-none pl-2"
                        required>{{$announcement->content }}</textarea>
              <div id="editor">
                  {!! $announcement->content !!}
              </div>
          </div>

          <div class="mt-4 ml-4">
              <label for="buttonText" class="font-semibold block">Button Text</label>
              <input type="text" name="buttonText" id="buttonText" class="border
          border-gray-400 rounded w-full px-2 py-2 mt-2" value="{{
            $announcement->buttonText}}" required>
          </div>

          <div class="mt-4 ml-4">
              <label for="buttonLink" class="font-semibold block">Button Link</label>
              <input type="text" name="buttonLink" id="buttonLink" class="border
          border-gray-400 rounded w-full px-2 py-2 mt-2" value="{{
            $announcement->buttonLink}}" required>
          </div>

          <div class="mt-4 ml-4">
              <label for="imageUpload" class="font-semibold block">Image Upload</label>
              <input type="file" name="imageUpload" class=" mt-2">
          </div>

          @if(asset('storage/' . $announcement->imageUpload))
          <div class="mt-4 mx-w-xs mx-auto">
              <img src="{{ asset('storage/' . $announcement->imageUpload) }}" alt="image"
                   class="mx-w-xs mx-auto">
          </div>
          @endif

          <div class="mt-6 ml-4">
              <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                  Update Announcement
              </button>
          </div>
      </form>
</div>
       </div>
    @push('scripts')
            <script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>

            <!-- Initialize Quill editor -->
            <script>
                const quill = new Quill('#editor', {
                    theme: 'snow',
                    placeholder: 'Enter announcement details'
                });

                const form = document.querySelector('#updateAnnouncement')
                form.addEventListener('submit', e => {
                    e.preventDefault();
                    const quillEditor = document.querySelector('#editor')
                    const html = quillEditor.children[0].innerHTML;
                    document.querySelector('#content').value = html;
                    form.submit();
                })
            </script>
        @endpush

</x-layout>
