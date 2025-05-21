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
    <main class="min-h-screen flex bg-[#181818]">
        <section class="flex w-1/2">
            <div class="flex flex-col gap-7 py-7 text-white w-full">
                <div class="flex justify-between items-center px-[20px] w-full">
                        <img src="{{ asset('logo.png') }}" alt="website logo">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.4">
                            <path d="M9.16667 15.8333C12.8486 15.8333 15.8333 12.8486 15.8333 9.16667C15.8333 5.48477 12.8486 2.5 9.16667 2.5C5.48477 2.5 2.5 5.48477 2.5 9.16667C2.5 12.8486 5.48477 15.8333 9.16667 15.8333Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M17.5 17.5L13.875 13.875" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                        </svg>
                </div>
                <form action="" class="flex px-5">
                        <button class="bg-[#242424] rounded-[3px] flex gap-2 items-center justify-center p-[10px] w-full text-white cursor-pointer">
                            <svg width="20" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.5 4.16666V15.8333" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M4.66669 10H16.3334" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span class="source-sans-semibold text-base">New Note</span>
                        </button>
                </form>
                <div class="flex flex-col gap-2">
                        <h2 class="source-sans-semibold text-base px-[20px]">Recents</h2>
                        <ul class="flex flex-col gap-1">
                            <li class="text-white flex items-center gap-3.5 py-2.5 px-5">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.0833 1.66666H4.99998C4.55795 1.66666 4.13403 1.84225 3.82147 2.15481C3.50891 2.46737 3.33331 2.8913 3.33331 3.33332V16.6667C3.33331 17.1087 3.50891 17.5326 3.82147 17.8452C4.13403 18.1577 4.55795 18.3333 4.99998 18.3333H15C15.442 18.3333 15.8659 18.1577 16.1785 17.8452C16.4911 17.5326 16.6666 17.1087 16.6666 16.6667V6.24999L12.0833 1.66666Z" stroke="white" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M11.6667 1.66666V6.66666H16.6667" stroke="white" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M13.3334 10.8333H6.66669" stroke="white" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M13.3334 14.1667H6.66669" stroke="white" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M8.33335 7.5H6.66669" stroke="white" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span class="source-sans-semibold text-base">Project proposal</span>
                            </li>
                        </ul>
                </div>
                <div class="flex flex-col gap-2">
                    <div class="px-5 flex items-center justify-between">
                            <h2 class="source-sans-semibold text-base">Folders</h2>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g opacity="0.4">
                                <path d="M3.66667 15.1667H17C17.442 15.1667 17.8659 14.9911 18.1785 14.6785C18.4911 14.366 18.6667 13.942 18.6667 13.5V5.16667C18.6667 4.72464 18.4911 4.30072 18.1785 3.98816C17.8659 3.67559 17.442 3.5 17 3.5H10.3917C10.1172 3.49858 9.84724 3.42937 9.60591 3.29853C9.36459 3.16769 9.15931 2.97927 9.00833 2.75L8.325 1.75C8.17402 1.52073 7.96875 1.33231 7.72742 1.20147C7.48609 1.07063 7.21618 1.00142 6.94167 1H3.66667C3.22464 1 2.80072 1.17559 2.48816 1.48816C2.17559 1.80072 2 2.22464 2 2.66667V13.5C2 14.4167 2.75 15.1667 3.66667 15.1667Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M10 8.33333V13.3333" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M7.5 10.8333H12.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                            </svg>

                    </div>
                    <ul class="flex flex-col gap-1">
                            <li class="text-white flex items-center gap-3.5 py-2.5 px-5 hover:bg-[#1f1f1f]">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.66667 17.1667H17C17.442 17.1667 17.8659 16.9911 18.1785 16.6785C18.4911 16.366 18.6667 15.942 18.6667 15.5V7.16667C18.6667 6.72464 18.4911 6.30072 18.1785 5.98816C17.8659 5.67559 17.442 5.5 17 5.5H10.3917C10.1172 5.49858 9.84724 5.42937 9.60591 5.29853C9.36459 5.16769 9.15931 4.97927 9.00833 4.75L8.325 3.75C8.17402 3.52073 7.96875 3.33231 7.72742 3.20147C7.48609 3.07063 7.21618 3.00142 6.94167 3H3.66667C3.22464 3 2.80072 3.17559 2.48816 3.48816C2.17559 3.80072 2 4.22464 2 4.66667V15.5C2 16.4167 2.75 17.1667 3.66667 17.1667Z" stroke="white" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span class="source-sans-semibold text-base">Personal</span>
                            </li>
                    </ul>
                </div>
                <div class="flex flex-col gap-2">
                        <h2 class="source-sans-semibold text-base px-5">More</h2>
                        <ul class="flex flex-col gap-1">
                            <li class="text-white flex items-center gap-3.5 py-2.5 px-5">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g opacity="0.6">
                                    <path d="M10.3333 2L12.9083 7.21667L18.6667 8.05833L14.5 12.1167L15.4833 17.85L10.3333 15.1417L5.18333 17.85L6.16667 12.1167L2 8.05833L7.75833 7.21667L10.3333 2Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                </svg>
                                <span class="source-sans-semibold text-base">Favorites</span>
                            </li>
                            <li class="text-white flex items-center gap-3.5 py-2.5 px-5">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.5 5H17.5" stroke="white" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M15.8334 5V16.6667C15.8334 17.5 15 18.3333 14.1667 18.3333H5.83335C5.00002 18.3333 4.16669 17.5 4.16669 16.6667V5" stroke="white" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M6.66669 5.00001V3.33334C6.66669 2.50001 7.50002 1.66667 8.33335 1.66667H11.6667C12.5 1.66667 13.3334 2.50001 13.3334 3.33334V5.00001" stroke="white" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span class="source-sans-semibold text-base">Trash</span>
                            </li>
                            <li class="text-white flex items-center gap-3.5 py-2.5 px-5">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16.6667 3.33333H3.33335C2.41288 3.33333 1.66669 4.07952 1.66669 4.99999V5.83333C1.66669 6.7538 2.41288 7.49999 3.33335 7.49999H16.6667C17.5872 7.49999 18.3334 6.7538 18.3334 5.83333V4.99999C18.3334 4.07952 17.5872 3.33333 16.6667 3.33333Z" stroke="white" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M3.33331 7.5V15C3.33331 15.442 3.50891 15.866 3.82147 16.1785C4.13403 16.4911 4.55795 16.6667 4.99998 16.6667H15C15.442 16.6667 15.8659 16.4911 16.1785 16.1785C16.4911 15.866 16.6666 15.442 16.6666 15V7.5" stroke="white" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M8 10H11.3333" stroke="white" stroke-opacity="0.6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span class="source-sans-semibold text-base">Archived Notes</span>
                            </li>
                        </ul>
                </div>
            </div>
            <div class="flex flex-col gap-7 px-5 py-7 bg-[#1c1c1c] w-full">
                <h1 class="source-sans-semibold text-white">Personal</h1>
                <ul class="flex flex-col gap-5">
                    <li class="p-5 flex flex-col gap-2.5 bg-[#232323] rounded-[3px] text-white hover:bg-[#333333]">
                        <h2 class="source-sans-semibold">My Goals for the Next Year</h2>
                        <div class="flex gap-2.5">
                            <h3 class="text-[#7b7b7b] w-fit">31/12/2022</h3>
                            <p class="text-[#a7a7a7] w-full">Lorem, ipsum dolor.</p>
                        </div>
                    </li>
                    <li class="p-5 flex flex-col gap-2.5 bg-[#232323] rounded-[3px] text-white hover:bg-[#333333]">
                        <h2 class="source-sans-semibold">My Goals for the Next Year</h2>
                        <div class="flex gap-2.5">
                            <h3 class="text-[#7b7b7b] w-fit">31/12/2022</h3>
                            <p class="text-[#a7a7a7] w-full">Lorem, ipsum dolor.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <section class="flex flex-col text-white gap-2.5 justify-center items-center w-1/2">
            <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M48.3334 6.66666H20C18.2319 6.66666 16.5362 7.36904 15.286 8.61929C14.0358 9.86953 13.3334 11.5652 13.3334 13.3333V66.6667C13.3334 68.4348 14.0358 70.1305 15.286 71.3807C16.5362 72.6309 18.2319 73.3333 20 73.3333H60C61.7681 73.3333 63.4638 72.6309 64.7141 71.3807C65.9643 70.1305 66.6667 68.4348 66.6667 66.6667V25L48.3334 6.66666Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M46.6666 6.66666V26.6667H66.6666" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M53.3333 43.3333H26.6666" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M53.3333 56.6667H26.6666" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M33.3333 30H26.6666" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <h1 class="source-sans-semibold text-2xl">Select a note to view</h1>
            <p class="text-center text-[#a3a3a3] w-2/3">Choose a note from the list on the left to view its contents, or create a new note to add to your collection.</p>
        </section>
    </main>
</body>
</html>