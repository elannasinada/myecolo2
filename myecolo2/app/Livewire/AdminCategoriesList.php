<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Facades\File;
use Livewire\WithPagination;

class AdminCategoriesList extends Component
{
    use WithPagination;

    public $categoriesPerPage = 11;

    protected $listeners = [
        'updateCategoriesOrdering',
        'deleteCategory',
    ];

    public function updateCategoriesOrdering($positions){
        foreach($positions as $position){
            $index = $position[0];
            $newPosition = $position[1];
            Category::where('id',$index)->update([
                'ordering'=>$newPosition
            ]);
        }
    }

    // public function updateCategoriesOrdering($positions){
    //     foreach($positions as $position){
    //         $index = $position[0];
    //         $newPosition = $position[1];
    //     }
    //     $category = Category::where('id', $index)->first();
    //         if ($category) {
    //             $category->ordering = $newPosition;
    //             $update = $category->save();
    //             if ($update) {
    //                 session()->flash('message', 'L\'ordre a été modifié avec succès !');
    //                 session()->flash('alert-type', 'success');
    //             } else {
    //                 session()->flash('message', 'Quelque chose s\'est mal passé');
    //                 session()->flash('alert-type', 'error');
    //             }
    //         }
    // }


    public function deleteCategory($category_id){
        $category = Category::findOrFail($category_id);
        $path = 'images/categories/';
        $category_image = $category->category_image;

        //DELETE CATEGORY IMAGE
        if( File::exists(public_path($path.$category_image)) ){
            File::delete($path.$category_image);
        }

        //DELETE CATEGORY FROM DB
        $delete = $category->delete();

        if( $delete ){
            session()->flash('message', 'La catégorie a été supprimée avec succès !');
            session()->flash('alert-type', 'success');
        }else{
            session()->flash('message', 'Quelque chose s\'est mal passé');
            session()->flash('alert-type', 'error');
        }
    }

    public function render()
    {
        return view('livewire.admin-categories-list',[
            'categories'=>Category::orderBy('ordering','asc')->paginate($this->categoriesPerPage,['*'],'categoriesPage'),
        ]);
    }
}
