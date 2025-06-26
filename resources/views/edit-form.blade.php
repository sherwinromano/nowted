<x-edit-form-layout>
    <x-slot name="noteList">
        <x-note-list :title="$note_title" :datas="$notes" containerClass="flex flex-col gap-2 h-full mt-4" />
    </x-slot>
    <x-note-list :title="$note_title" :datas="$notes" containerClass="xs:hidden md:flex flex-col gap-7 px-5 py-7 bg-[#1c1c1c] w-[50%]" />
    <div class="flex flex-col xs:p-5 md:p-8 w-full xs:gap-4 md:gap-8">
        <h1 class="text-white font-bold xs:text-[1.3rem] sm:text-2xl">{{ $note->title }}</h1>
        <form action="{{ route('notes.update', $note->id) }}" method="POST" class="flex flex-col h-full justify-between">
            @csrf
            <div class="flex flex-col gap-2">
                <label for="title" class="text-base text-white">Title</label>
                <input type="text" name="title" id="title" class="w-full bg-[#232323] rounded-md p-3 text-white focus:outline-2 outline-white outline-offset-3" value="{{ old('title', $note->title) }}" required>
                <label for="body" class="text-base text-white">Body</label>
                <textarea name="body" id="body" class="w-full bg-[#232323] rounded-md p-3 text-white focus:outline-2 outline-white outline-offset-3 resize-none" rows="10" required>{{ old('body', $note->body) }}</textarea>
                @if ($errors->any())
                    <ul class="p-4 bg-[#242424] rounded-md my-2">
                        @foreach ($errors->all() as $error)
                            <li class="text-sm text-red-400">{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
            <button type="submit" class=" bg-green-700 text-black font-bold cursor-pointer xs:text-[14px] sm:text-base px-8 py-2 rounded-md w-fit mt-4">Update</button>
        </form>
    </div>
</x-edit-form-layout>