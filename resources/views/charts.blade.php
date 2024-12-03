<x-layout>
    <x-slot:heading>Charts</x-slot:heading>

    <div class="bg-white rounded-md border my-8 px-6 py-6">
        <div>
            <h2 class="text-2xl font-semibold">Charts</h2>
            <livewire:chart-orders/>
        </div>
    </div>
        @push('scripts')
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        @endpush
</x-layout>
