<?php

namespace App\Livewire\Stats;

use App\Models\User;
use Livewire\Component;





class UsersCount extends Component
{
    public $selectedDays;
    public $userCount;

    public function mount() {
        $this->selectedDays = 30;
        $this->updateStat();
    }

    public function updateStat() {
      $this->userCount = User::where('created_at', '>=', now()->subDays($this->selectedDays))->count();
    }



    public function render()
    {
        return view('livewire.stats.users-count', [
            'userCount' => $this->userCount
        ]);
    }
}
