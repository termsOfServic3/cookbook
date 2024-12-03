<table class="w-full text-left border-collapse">
    <thead>
    <tr class="border-b">
        <th class="py-2 px-4 text-neutral-950 font-bold">ID</th>
        <th class="py-2 px-4 text-neutral-950 font-bold">Name</th>
        <th class="py-2 px-4 text-neutral-950 font-bold">Artist</th>
        <th class="py-2 px-4 text-neutral-950 font-bold">Year</th>
    </tr>
    </thead>
    <tbody wire:sortable="updateSongOrder">
    @foreach($songs as $song)
        <tr class="border-b" wire:sortable.item="{{ $song->id }}" wire:key="task-{{ $song->id }}" wire:sortable.handle>
            <td class="py-2 px-4 text-neutral-950">{{$song->id}}</td>
            <td class="py-2 px-4 text-neutral-950">{{$song->title}}</td>
            <td class="py-2 px-4 text-neutral-950">{{$song->artist}}</td>
            <td class="py-2 px-4 text-neutral-950">{{$song->year}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
