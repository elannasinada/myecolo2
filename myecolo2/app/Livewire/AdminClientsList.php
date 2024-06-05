<?php

namespace App\Livewire;
use App\Models\Client;

use Livewire\Component;

class AdminClientsList extends Component
{

    public function deleteClient($clientId)
    {
        $client = Client::findOrFail($clientId);
        $client->delete();

        session()->flash('message', 'Le client a été supprimé avec succès !');
        session()->flash('alert-type', 'success');
    }


    public function render()
    {
        $clients = Client::paginate(10); // Fetch clients data from the database
        return view('livewire.admin-clients-list', ['clients' => $clients]); // Pass clients data to the view
    }
}
