<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Edit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            
                <div class="my-6 p-6 bg-blue-600 border-b border-gray-200 shadow-sm sm:rounded-lg">
                    <form action="{{ route('notes.update', $note)}}" method="post">
                        @method('put')
                        @csrf
                        <x-input type="text" name="title" placeholder="Enter a title..." class="w-full" autocomplete="off" :value="@old('title', $note->title)"></x-input>
                        <x-textarea name="text" rows="10" placeholder="Enter text..." class="w-full" :value="@old('text', $note->text)"></x-textarea>
                        
                        <button class="mt-6 bg-slate-500 text-white rounded-md p-1">Save Note</button>
                    </form>
                </div>
            
        </div>
    </div>
</x-app-layout>
