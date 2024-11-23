<?php

namespace App\Livewire\Web;
use Livewire\Attributes\Layout;
use Livewire\Component;

class About extends Component{

    #[Layout('layouts.index')]
    public function render(){
        return view('livewire.web.about');
    }
}
