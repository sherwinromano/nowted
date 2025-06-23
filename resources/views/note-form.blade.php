<x-note-form-layout>
    <x-note-list 
        :title="$note_title" 
        :datas="$notes"
    />
    <div class="flex flex-col p-8 w-full gap-8">
        <h1 class="text-white font-bold text-2xl">New note</h1>
        <form action="{{ route('notes.store') }}" method="POST" class="flex flex-col h-full justify-between">
            @csrf
            <div class="flex flex-col gap-2">
                <label for="title" class="text-base text-white">Title</label>
                <input type="text" name="title" id="title" class="w-full bg-[#232323] rounded-md p-3 text-white focus:outline-2 outline-white outline-offset-3" value="{{ old('title') }}" required>
                <label for="body" class="text-base text-white">Body</label>
                <textarea name="body" id="body" class="w-full bg-[#232323] rounded-md p-3 text-white focus:outline-2 outline-white outline-offset-3 resize-none" rows="10" required>{{ old('body') }}</textarea>
                @if ($errors->any())
                    <ul class="p-4 bg-[#242424] rounded-md my-2">
                        @foreach ($errors->all() as $error)
                            <li class="text-sm text-red-400">{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
            <button type="submit" class=" bg-green-700 text-black font-bold cursor-pointer px-8 py-2 rounded-md w-fit mt-4">Create</button>
        </form>
    </div>
</x-note-form-layout>