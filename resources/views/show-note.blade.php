@if ($title === "All notes") 
<x-index-layout>
    <x-note-list 
        title="All notes" 
        :datas="$notes" 
    />
    <div class="flex flex-col text-white gap-2.5 p-8 w-full">
        <div class="flex justify-between items-center relative">
            <h1 class="font-semibold text-2xl">{{ $note->title }}</h1>
            <button id="dropdown-button" role="dropdown-button">
                <svg width="28" height="28" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg" class="cursor-pointer">
                    <g opacity="0.4">
                    <rect x="0.5" y="0.5" width="29" height="29" rx="14.5" stroke="white"/>
                    <path d="M15 15.8334C15.4603 15.8334 15.8334 15.4603 15.8334 15C15.8334 14.5398 15.4603 14.1667 15 14.1667C14.5398 14.1667 14.1667 14.5398 14.1667 15C14.1667 15.4603 14.5398 15.8334 15 15.8334Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M20.8333 15.8334C21.2936 15.8334 21.6667 15.4603 21.6667 15C21.6667 14.5398 21.2936 14.1667 20.8333 14.1667C20.3731 14.1667 20 14.5398 20 15C20 15.4603 20.3731 15.8334 20.8333 15.8334Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M9.16665 15.8334C9.62688 15.8334 9.99998 15.4603 9.99998 15C9.99998 14.5398 9.62688 14.1667 9.16665 14.1667C8.70641 14.1667 8.33331 14.5398 8.33331 15C8.33331 15.4603 8.70641 15.8334 9.16665 15.8334Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </g>
                </svg>
            </button>
            <x-dropdown-list :title="$title" :note="$note"/>
        </div>
        <div class="flex flex-col">
            <div class="flex gap-4 border-b border-[#2f2f2f] py-4">
                <div class="flex items-center gap-5 w-[20%]">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.6">
                        <path d="M14.25 3H3.75C2.92157 3 2.25 3.67157 2.25 4.5V15C2.25 15.8284 2.92157 16.5 3.75 16.5H14.25C15.0784 16.5 15.75 15.8284 15.75 15V4.5C15.75 3.67157 15.0784 3 14.25 3Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 1.5V4.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M6 1.5V4.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M2.25 7.5H15.75" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M6 10.5H6.00833" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M9 10.5H9.00833" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 10.5H12.0083" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M6 13.5H6.00833" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M9 13.5H9.00833" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 13.5H12.0083" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                    </svg>
                    <span class="text-base text-[#a3a3a3] font-semibold">Date</span>    
                </div>
                <p class="underline font-semibold">{{ $note->created_at->format('m/d/Y') }}</p>
            </div>
        </div>
        <p class="text-base text-white">{{ $note->body}}</p>
    </div>
</x-index-layout>
@else
<x-favorites-layout>
    <x-note-list 
        title="Favorites" 
        :datas="$notes" 
    />
    <div class="flex flex-col text-white gap-2.5 p-8 w-full">
        <div class="flex justify-between items-center relative">
            <h1 class="font-semibold text-2xl">{{ $note->title }}</h1>
            <button id="dropdown-button" role="dropdown-button">
                <svg width="28" height="28" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg" class="cursor-pointer">
                    <g opacity="0.4">
                    <rect x="0.5" y="0.5" width="29" height="29" rx="14.5" stroke="white"/>
                    <path d="M15 15.8334C15.4603 15.8334 15.8334 15.4603 15.8334 15C15.8334 14.5398 15.4603 14.1667 15 14.1667C14.5398 14.1667 14.1667 14.5398 14.1667 15C14.1667 15.4603 14.5398 15.8334 15 15.8334Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M20.8333 15.8334C21.2936 15.8334 21.6667 15.4603 21.6667 15C21.6667 14.5398 21.2936 14.1667 20.8333 14.1667C20.3731 14.1667 20 14.5398 20 15C20 15.4603 20.3731 15.8334 20.8333 15.8334Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M9.16665 15.8334C9.62688 15.8334 9.99998 15.4603 9.99998 15C9.99998 14.5398 9.62688 14.1667 9.16665 14.1667C8.70641 14.1667 8.33331 14.5398 8.33331 15C8.33331 15.4603 8.70641 15.8334 9.16665 15.8334Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </g>
                </svg>
            </button>
            <x-dropdown-list :title="$title" :note="$note"/>
        </div>
        <div class="flex flex-col">
            <div class="flex gap-4 border-b border-[#2f2f2f] py-4">
                <div class="flex items-center gap-5 w-[20%]">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.6">
                        <path d="M14.25 3H3.75C2.92157 3 2.25 3.67157 2.25 4.5V15C2.25 15.8284 2.92157 16.5 3.75 16.5H14.25C15.0784 16.5 15.75 15.8284 15.75 15V4.5C15.75 3.67157 15.0784 3 14.25 3Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 1.5V4.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M6 1.5V4.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M2.25 7.5H15.75" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M6 10.5H6.00833" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M9 10.5H9.00833" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 10.5H12.0083" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M6 13.5H6.00833" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M9 13.5H9.00833" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 13.5H12.0083" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                    </svg>
                    <span class="text-base text-[#a3a3a3] font-semibold">Date</span>    
                </div>
                <p class="underline font-semibold">{{ $note->created_at->format('m/d/Y') }}</p>
            </div>
        </div>
        <p class="text-base text-white">{{ $note->body}}</p>
    </div>
</x-favorites-layout>
@endif

