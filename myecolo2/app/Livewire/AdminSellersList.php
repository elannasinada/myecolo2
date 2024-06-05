<?php

namespace App\Livewire;
use App\Models\Seller;

use Livewire\Component;

class AdminSellersList extends Component
{
    public $sellers;

    public function mount()
    {
        // Fetch sellers with 'Pending' status
        $this->sellers = Seller::where('status', 'Pending')->get();
    }

    public function render()
    {
        return view('livewire.admin-sellers-list', [
            'sellers' => $this->sellers,
        ]);
    }
}
