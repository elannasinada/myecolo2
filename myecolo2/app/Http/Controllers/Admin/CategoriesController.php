<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Category;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class CategoriesController extends Controller
{
    public function catList(Request $request)
    {
        $data = [
            'pageTitle'=>'Gestion Categories'
        ];
        return view('back.pages.admin.cats-list',$data);
    }

    public function addCategory(Request $request){
        $data = [
            'pageTitle'=>'Ajouter Categorie'
        ];
        return view('back.pages.admin.add-category',$data);
    }

    public function storeCategory(Request $request){
        //VALIDATE THE FORM
        $request->validate([
            'category_name'=>'required|min:5|unique:categories,category_name',
        ],[
            'category_name.required'=>':Attribute est requis',
            'category_name.min'=>':Attribute doit contenir au moins 5 caractères',
            'category_name.unique'=>'This :attribute existe déjà',
        ]);

        //Save category into Database
        $category = new Category();
        $category->category_name = $request->category_name;
        $saved = $category->save();

        if( $saved ){
            return redirect()->route('admin.manage-categories.add-category')->with('success','<b>'.ucfirst($request->category_name).'</b> a été ajoutée avec succès.');
        }else{
            return redirect()->route('admin.manage-categories.add-category')->with('fail','Quelque chose s\'est mal passé lors de l\'ajout de la catégorie');
        }
    }

    public function editCategory(Request $request){
        $category_id = $request->id;
        $category = Category::findOrFail($category_id);
        $data = [
            'pageTitle'=>'Modification Categorie',
            'category'=>$category
        ];
        return view('back.pages.admin.edit-category',$data);
    }

    public function updateCategory(Request $request){
        $category_id = $request->category_id;
        $category = Category::findOrFail($category_id);

        //VALIDATE THE FORM
        $request->validate([
            'category_name'=>'required|min:5|unique:categories,category_name,'.$category_id,
        ],[
            'category_name.required'=>':Attribute est requis',
            'category_name.min'=>':Attribute doit contenir au moins 5 caractères',
            'category_name.unique'=>'This :attribute existe déjà',
        ]);

        $category->category_name = $request->category_name;
        $category->category_slug = null;
        $saved = $category->save();

        if( $saved ){
            return redirect()->route('admin.manage-categories.edit-category',['id'=>$category_id])->with('success','La catégorie <b>'.ucfirst($request->category_name).'</b> a été mise à jour.');
        }else{
            return redirect()->route('admin.manage-categories.edit-category',['id'=>$category_id])->with('fail','Quelque chose s\'est mal passé.');
        }
    }
}
