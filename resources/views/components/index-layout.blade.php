<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nowted</title>
    @vite('resources/js/app.js')
</head>
<body>
    <main class="h-screen flex bg-[#181818] overflow-hidden">
        <section class="flex flex-col gap-7 py-7 text-white w-[30%]">
            <div class="flex justify-between items-center px-[20px] w-full">
                <a href="{{ route('notes.index') }}">
                    <img src="{{ asset('logo.png') }}" alt="website logo">
                </a>
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g opacity="0.4">
                    <path d="M9.16667 15.8333C12.8486 15.8333 15.8333 12.8486 15.8333 9.16667C15.8333 5.48477 12.8486 2.5 9.16667 2.5C5.48477 2.5 2.5 5.48477 2.5 9.16667C2.5 12.8486 5.48477 15.8333 9.16667 15.8333Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M17.5 17.5L13.875 13.875" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </g>
                </svg>
            </div>
            <form class="flex px-5">
                @csrf
                    <a href="{{ route('notes.create') }}" class="bg-[#242424] rounded-[3px] flex gap-2 items-center justify-center p-[10px] w-full text-white cursor-pointer">
                        <svg width="20" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.5 4.16666V15.8333" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M4.66669 10H16.3334" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span class="source-sans-semibold text-base">New Note</span>
                    </a>
            </form>
            <div class="flex flex-col gap-2">
                <ul class="flex flex-col gap-1">
                    <li class="text-white flex">
                        <a href="{{ route('favorites.index') }}" class="py-2.5 px-5 flex items-center gap-3.5 hover:bg-[#1f1f1f] w-full">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.6">
                                <path d="M10.3333 2L12.9083 7.21667L18.6667 8.05833L14.5 12.1167L15.4833 17.85L10.3333 15.1417L5.18333 17.85L6.16667 12.1167L2 8.05833L7.75833 7.21667L10.3333 2Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                            </svg>
                            <span class="source-sans-semibold text-base">Favorites</span>
                        </a>     
                    </li>
                    <li class="text-white flex">
                        <a href="{{ route('archives.index') }}" class="py-2.5 px-5 flex items-center gap-3.5 hover:bg-[#1f1f1f] w-full">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.6667 3.33333H3.33335C2.41288 3.33333 1.66669 4.07952 1.66669 4.99999V5.83333C1.66669 6.7538 2.41288 7.49999 3.33335 7.49999H16.6667C17.5872 7.49999 18.3334 6.7538 18.3334 5.83333V4.99999C18.3334 4.07952 17.5872 3.33333 16.6667 3.33333Z" stroke="white" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M3.33331 7.5V15C3.33331 15.442 3.50891 15.866 3.82147 16.1785C4.13403 16.4911 4.55795 16.6667 4.99998 16.6667H15C15.442 16.6667 15.8659 16.4911 16.1785 16.1785C16.4911 15.866 16.6666 15.442 16.6666 15V7.5" stroke="white" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8 10H11.3333" stroke="white" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span class="source-sans-semibold text-base">Archived Notes</span>
                        </a>
                    </li>
                    <li class="text-white flex">
                        <a href="{{ route('trash.index') }}" class="py-2.5 px-5 flex items-center gap-3.5 hover:bg-[#1f1f1f] w-full">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.5 5H17.5" stroke="white" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M15.8334 5V16.6667C15.8334 17.5 15 18.3333 14.1667 18.3333H5.83335C5.00002 18.3333 4.16669 17.5 4.16669 16.6667V5" stroke="white" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M6.66669 5.00001V3.33334C6.66669 2.50001 7.50002 1.66667 8.33335 1.66667H11.6667C12.5 1.66667 13.3334 2.50001 13.3334 3.33334V5.00001" stroke="white" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span class="source-sans-semibold text-base">Trash</span>
                        </a>     
                    </li>
                </ul>
            </div>
        </section>
        <section class="flex w-full">
            {{ $slot }}
        </section>
    </main>
</body>
</html>