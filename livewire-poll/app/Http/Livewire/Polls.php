<?php

namespace App\Http\Livewire;

use App\Models\Option;
use App\Models\Poll;
use Livewire\Component;

class Polls extends Component
{

    protected $listeners=[
        'pollCreated'=> 'render'
    ];

    public function render()
    {

        $polls = Poll::with('options.votes')->latest()->get();
        return view('livewire.polls',['polls'=> $polls]);
    }

    public function vote(Option $option){
        $option->votes()->create();
    }
}
