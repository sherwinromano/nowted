<x-trash-layout>
    <x-note-list :title="$note_title" :datas="$trashes" />
    <div class="flex flex-col text-white gap-2.5 justify-center items-center w-full">
            <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M48.3334 6.66666H20C18.2319 6.66666 16.5362 7.36904 15.286 8.61929C14.0358 9.86953 13.3334 11.5652 13.3334 13.3333V66.6667C13.3334 68.4348 14.0358 70.1305 15.286 71.3807C16.5362 72.6309 18.2319 73.3333 20 73.3333H60C61.7681 73.3333 63.4638 72.6309 64.7141 71.3807C65.9643 70.1305 66.6667 68.4348 66.6667 66.6667V25L48.3334 6.66666Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M46.6666 6.66666V26.6667H66.6666" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M53.3333 43.3333H26.6666" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M53.3333 56.6667H26.6666" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M33.3333 30H26.6666" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <h1 class="source-sans-semibold text-2xl">Select a note to view</h1>
            <p class="text-center text-[#a3a3a3] w-2/3">Choose a note from the list on the left to view its contents, or create a new note to add to your collection.</p>    
    </div>
</x-trash-layout>