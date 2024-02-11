<div class="flex flex-col mt-3 flex-1 items-center">
    <form class="print:hidden w-full">
        <textarea wire:model.live="message" name="" id="" cols="30" rows="10"
                  class="bg-white/25 text-white p-2 rounded w-full"></textarea>
        <div>
            <button type="button" @click="window.print()" @disabled(!$message)
            class="disabled:bg-gray-700 disabled:text-gray-600   bg-blue-800 text-white mt-2 py-2 px-4 rounded-xl transition duration-300 hover:bg-blue-600">Print
            </button>
        </div>
    </form>
    <x-code :message="$message" :letters="$this->letters"></x-code>
    @if($message)
        <x-legend :letters="$this->letters"></x-legend>
    @endif
</div>


