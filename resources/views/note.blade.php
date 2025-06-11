<x-index-layout>
    <x-note-list :notes="$notes" />
    <div class="flex flex-col text-white gap-2.5 justify-center items-center w-full">
        <h1>{{ $note->title }}</h1>   
    </div>
</x-index-layout>