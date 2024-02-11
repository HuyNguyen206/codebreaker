@props(
    [
        'letters'
     ]
)
    <div class="flex justify-center text-white flex-wrap mt-auto">
        @foreach($letters as $character => $symbol)
                <div class="flex flex-col items-center border border-white/20 p-2 font-bold uppercase">
                    <span>{{$character}}</span>
                    <span class="material-symbols-outlined">{{$symbol}}</span>
                </div>
        @endforeach
    </div>
