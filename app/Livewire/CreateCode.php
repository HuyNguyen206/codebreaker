<?php

namespace App\Livewire;

use Illuminate\Support\Arr;
use Livewire\Attributes\Computed;
use Livewire\Component;

class CreateCode extends Component
{
    public string $message = '';

//    public array $letterToSymbol = [];

    protected array $symbols = [
        'search',
        'home',
        'menu',
        'close',
        'expand_more',
        'check_circle',
        'favorite',
        'add',
        'star',
        'logout',
        'remove',
        'bolt',
        'key',
        'sort',
        'add_box',
        'menu_open',
        'undo',
        'backspace',
        'open_in_full',
        'reply',
        'terminal',
        'minimize',
        'token',
        'heart_plus',
        'expand',
        'place_item',
        'check_small',
        'eject',
        'php',
        'rebase',
        'cycle',
        'data_alert',
        'step',
        'stacks',
    ];

    public array $symbolDisplay = [];

    #[Computed(persist: true)]
    public function letters():array
    {
        return collect(range('a', 'z'))->combine(Arr::random($this->symbols, 26))->toArray();
//        $letters = range('a', 'z');
//        $usedSymbol = [];
//        foreach ($letters as $letter) {
//            $randomElement = $this->symbols[array_rand($this->symbols)];
//            while (in_array($randomElement, $usedSymbol)) {
//                $randomElement = $this->symbols[array_rand($this->symbols)];
//            }
//            $letterSymbol[$letter] = $randomElement;
//            $usedSymbol[] = $randomElement;
//        }
//
//        $this->letterToSymbol = $letterSymbol ?? [];
    }

//    public function mount()
//    {
//        $this->letters();
//    }

//    public function updatedMessage()
//    {
//        $messages = str_split(trim($this->message));
//        $newSymbolDisplay = [];
//        foreach ($messages as $character) {
//            $character = strtolower($character);
//            if (empty(trim($character))) {
//                continue;
//            }
//
//            $newSymbolDisplay[] = $this->letters[$character] ?? $character;
//        }
//
//        $this->symbolDisplay = $newSymbolDisplay;
//    }

    public function render()
    {
        return view('livewire.create-code');
    }
}
