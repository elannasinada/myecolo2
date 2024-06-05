<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;


class ClientsController extends Controller
{

    protected $listeners = [
        'deleteClient',
    ];
    
    public function showAllClients(Request $request)
    {
        $clients = Client::paginate(10);
        return view('back.pages.admin.clients-list', compact('clients'));
    }

    public function deleteClient($id){
        $client = Client::findOrFail($id);
        $client->delete();

        return redirect()->back()->with('success', 'Le client a été supprimé avec succès !');
    }

}
