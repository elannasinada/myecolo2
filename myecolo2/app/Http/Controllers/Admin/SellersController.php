<?php


namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Seller;



class SellersController extends Controller
{
    public function showPendingSellers(Request $request)
    {
        $sellers = Seller::where('status', 'Pending')->get();
        return view('back.pages.admin.sellers-list',compact('sellers'));
    }

    public function updateSellerStatus(Request $request, $id)
    {
        $seller = Seller::find($id);
        $seller->status = $request->input('status');
        $seller->save();

        return redirect()->back()->with('success', 'Le statut du vendeur a été mis à jour avec succès !');
    }

}
