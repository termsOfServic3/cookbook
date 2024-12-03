<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet" />
    @livewireStyles

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.14.3/dist/cdn.min.js" defer></script>
</head>
<body class="bg-teal-50">
<div>
    @if($isActive)
    <div class="bg-purple-800 text-white text-lg font-medium" style="background: {{$bannerColor}}">
    <a href="/announcement" class="container mx-auto px-4 py-4 flex items-center lg:w-max
    text-center hover:text-gray-100">
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
             stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.536 8.464a5 5 0
                010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0
                011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.
                707.707L5.586 15z" />
            </svg>
        </div>
        <div class="ml-4">{{$bannerText}}</div>
        @endif
    </a>
        <div class="block- flex-row bg-blue-600 w-full bg-auto p-6 space-x-6">
            <a href="/" class="text-sm font-semibold text-white ml-10">Home</a>
            <a href="/charts" class="text-sm font-semibold text-white ml-4">Charts</a>
            <a href="/stats" class="text-sm font-semibold text-white ml-4">Stats</a>
            <a href="/announcement/edit" class="text-sm font-semibold text-white ml-4">Edit Announcement</a>
            <a href="/posts/index" class="text-sm font-semibold text-white ml-4">Post</a>
            <a href="/posts/create" class="text-sm font-semibold text-white ml-4">Create Posts</a>
            <a href="/drag/drop" class="text-sm font-semibold text-white ml-4">Drag and Drop</a>
        </div>
    </div>
</div>


<main class="container mx-auto px-4 py-4">
    {{$slot}}
</main>


@livewireScripts
@stack('scripts')

</body>
</html>
