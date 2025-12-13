@props(['id', 'title'=>''])

<div id="{{ $id }}" class="bg-black bg-opacity-25 border fixed top-0 left-0 right-0 bottom-0 border-black  hidden">
    <div class="flex flex-col gap-6 items-center w-[40%] py-4 mx-auto my-auto 
            border border-black rounded-lg bg-white
            max-h-[80vh] overflow-y-auto">
        <p class="text-black text-xl font-semibold">{{ $title }}</p>
        <div class="mt-6 flex flex-col w-[90%] gap-3">
            {{ $slot }}
        </div>
    </div>
</div>