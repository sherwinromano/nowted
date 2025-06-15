@props(['title', 'note'])

<ul id="dropdown-list" role="dropdown-list" class="absolute top-full hidden flex-col gap-2 mt-2 right-0 bg-[#333333] text-white p-3 rounded-md w-[30%]">
    <li class="{{ $title === "Favorites" || $note->added_favorite == 1 ? 'hidden' : 'flex' }}">
        <form action="{{ route('notes.addToFavorites', $note->id) }}" class="w-full hover:bg-[#1f1f1f] p-2 rounded-sm" method="POST">
            @csrf
            <button type="submit" class="w-full flex items-center p-2 gap-3.5 cursor-pointer">
                <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9.99996 1.66669L12.575 6.88335L18.3333 7.72502L14.1666 11.7834L15.15 17.5167L9.99996 14.8084L4.84996 17.5167L5.83329 11.7834L1.66663 7.72502L7.42496 6.88335L9.99996 1.66669Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span>Add to favorites</span> 
            </button>
        </form>
    </li>
    <li class="flex">
        <form action="" class="w-full hover:bg-[#1f1f1f] rounded-sm" method="POST">
            @csrf
            <button type="submit" class="w-full flex items-center p-2 gap-3.5 cursor-pointer">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16.6666 3.33331H3.33329C2.41282 3.33331 1.66663 4.07951 1.66663 4.99998V5.83331C1.66663 6.75379 2.41282 7.49998 3.33329 7.49998H16.6666C17.5871 7.49998 18.3333 6.75379 18.3333 5.83331V4.99998C18.3333 4.07951 17.5871 3.33331 16.6666 3.33331Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M3.33337 7.5V15C3.33337 15.442 3.50897 15.866 3.82153 16.1785C4.13409 16.4911 4.55801 16.6667 5.00004 16.6667H15C15.4421 16.6667 15.866 16.4911 16.1786 16.1785C16.4911 15.866 16.6667 15.442 16.6667 15V7.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M8.33337 10.8333H11.6667" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>                        
                <span>Archived</span>    
            </button>
        </form>
    </li>
    <li class="flex">
        <form action="{{ route('notes.destroy', $note->id) }}" class="w-full hover:bg-[#1f1f1f] rounded-sm" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="w-full flex items-center p-2 gap-3.5 cursor-pointer">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.5 5H17.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M15.8333 5V16.6667C15.8333 17.5 15 18.3333 14.1666 18.3333H5.83329C4.99996 18.3333 4.16663 17.5 4.16663 16.6667V5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M6.66663 5.00002V3.33335C6.66663 2.50002 7.49996 1.66669 8.33329 1.66669H11.6666C12.5 1.66669 13.3333 2.50002 13.3333 3.33335V5.00002" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg> 
                <span>Delete</span>
            </button>
        </form> 
    </li>
</ul>