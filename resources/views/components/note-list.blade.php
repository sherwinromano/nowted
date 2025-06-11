@props(['notes'])

<div class="flex flex-col gap-7 px-5 py-7 bg-[#1c1c1c] w-[50%]">
    <h1 class="source-sans-semibold text-white">All notes</h1>
    <ul class="flex flex-col gap-5">
        @foreach ($notes as $note)
        <li class="p-5 flex flex-col gap-2.5 bg-[#232323] rounded-[3px] text-white hover:bg-[#333333]">
            <a href="{{ route('notes.show', $note->id) }}">
                <h2 class="source-sans-semibold">{{ $note->title }}</h2>
                <div class="flex gap-2.5">
                    <h3 class="text-[#7b7b7b] w-fit">{{ $note->created_at->format('d/m/Y') }}</h3>
                    <p class="text-[#a7a7a7] w-full">{{ $note->body }}</p>
                </div>
            </a>
        </li>
        @endforeach  
    </ul>
</div>    