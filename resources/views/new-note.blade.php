<x-index-layout>
    <div class="flex flex-col p-8 w-1/2 gap-8">
        <h1 class="text-white font-bold text-2xl">New note</h1>
        <form action="{{ route('notes.store') }}" method="POST" class="flex flex-col gap-2">
            @csrf
            <label for="title" class="text-base text-white">Title</label>
            <input type="text" name="title" id="title" class="w-full border-b border-b-neutral-700 p-2 text-white outline-none focus:border-b-white" value="{{ old('title') }}" required>
            <label for="body" class="text-base text-white">Body</label>
            <textarea name="body" id="body" class="w-full border-b border-b-neutral-700 p-2 outline-none resize-none text-white focus:border-b-white" rows="10" required>{{ old('body') }}</textarea>
            @if ($errors->any())
                <ul class="p-4 bg-[#242424] rounded-md my-2">
                    @foreach ($errors->all() as $error)
                        <li class="text-sm text-red-400">{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <button type="submit" class="bg-white text-black font-bold cursor-pointer px-8 py-2 rounded-md w-fit mt-4">Create</button>
        </form>
    </div>
</x-index-layout>