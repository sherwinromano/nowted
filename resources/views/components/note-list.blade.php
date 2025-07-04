@props(['title', 'datas'])

<div class="flex flex-col gap-7 px-5 py-7 bg-[#1c1c1c] w-[50%]">
    <h1 class="source-sans-semibold text-white">{{ $title }}</h1>
    <ul class="flex flex-col gap-5 overflow-y-scroll scrollbar-hide">
        @if(count($datas) === 0) 
            <p class="text-white text-2xl">
                @if($title === "All notes")
                    No notes
                @elseif($title === "Favorites")
                    Favorites note is empty
                @elseif($title === "Trash")
                    Trash is empty
                @else
                    Archived notes is empty
                @endif    
            </p>
        @else
            @foreach ($datas as $data)
            <li class="flex bg-[#232323] rounded-[3px] text-white hover:bg-[#333333]">
                <a class="flex flex-col gap-2 p-5 w-full" 
                href="{{ 
                    route(match($title) {
                        "All notes" => 'notes.show',
                        "Favorites" => 'favorites.show', 
                        "Trash" => 'trash.show',
                        "Archived notes" => 'archives.show',
                        default => 'notes.show'
                    }, $data->id)
                }}">
                    <h2 class="source-sans-semibold">{{ $data->title }}</h2>
                    <div class="flex gap-2.5">
                        <h3 class="text-[#7b7b7b] w-fit">{{ $data->created_at->format('m/d/Y') }}</h3>
                        <p id="note-body" class="text-[#a7a7a7] w-full leading-tight">{{ $data->body }}</p>
                    </div>
                </a>
            </li>
            @endforeach 
        @endif
        
    </ul>
</div>    