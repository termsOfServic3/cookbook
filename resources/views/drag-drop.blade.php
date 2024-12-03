<x-layout>
    @push('styles')
        <style>
            .draggable-mirror {
                background: blue;
            }
        </style>
    @endpush
<div class="bg-white shadow rounded-lg p-6 mt-2">
   <livewire:drag-drop-songs />
</div>
    @push('scripts')
        <script src="https://cdn.jsdelivr.net/gh/livewire/sortable@v1.x.x/dist/livewire-sortable.js"></script>
    @endpush
</x-layout>
