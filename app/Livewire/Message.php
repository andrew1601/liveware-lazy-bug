<?php

namespace App\Livewire;

use Livewire\Component;

class Message extends Component
{

    public function mount()
    {
        sleep(3);
    }

    public function placeholder()
    {
        return <<<'HTML'
            <p>Message component loading...</p>
        HTML;
    }

    public function render()
    {
        return view('livewire.message');
    }
}
