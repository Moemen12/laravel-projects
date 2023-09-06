<?php

namespace App\Http\Livewire;

use App\Models\Poll;
use Livewire\Component;

class Polls extends Component
{


    public function render()
    {

        $polls = Poll::with('options.votes')->latest()->get();
        return view('livewire.polls',['polls'=> $polls]);
    }
}
