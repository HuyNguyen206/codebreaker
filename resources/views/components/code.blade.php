@props(
    [
        'message',
        'letters'
     ]
)
<div class="flex justify-center text-white mt-2 print:mt-auto gap-6 flex-wrap">
    @foreach(explode(' ', $message) as $word)
            <div class="flex items-center gap-2">
                @foreach (str_split($word) as $character)
                    <div class="flex flex-col items-center">
                        <span class="material-symbols-outlined !text-4xl">{{$letters[$character] ?? $character}}</span>
                        <span class="bg-gray-200 w-12 h-12"></span>
                    </div>
                @endforeach
            </div>
    @endforeach
</div>
