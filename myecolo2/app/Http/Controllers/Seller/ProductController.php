<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use App\Rules\ValidatePrice;
use Illuminate\Support\Facades\File;
use Nette\Utils\Image;


class ProductController extends Controller{

    public function addProduct(Request $request){
       $data = [
          'pageTitle'=>'Ajout de produit',
          'categories'=>Category::orderBy('category_name','asc')->get()
       ];
       return view('back.pages.seller.add-product',$data);
    } //End Method

    // public function getProductCategory(Request $request){
    //     $category_id = $request->category_id;
    //     $category = Category::findOrFail($category_id);

    //     $html = '';
    //     foreach( $subcategories as $item ){
    //         $html.='<option value="'.$item->id.'">'.$item->subcategory_name.'</option>';
    //         if( count($item->children) > 0 ){
    //             foreach( $item->children as $child ){
    //                 $html.='<option value="'.$child->id.'">-- '.$child->subcategory_name.'</option>';
    //             }
    //         }
    //     }
    //     return response()->json(['status'=>1,'data'=>$html]);
    // } //End Methodwithsubcategories

    // public function getProductCategory(Request $request){
    //     $category_id = $request->category_id;
    //     $category = Category::findOrFail($category_id);

    //     $categories = Category::where('parent_id', $category_id)->get();

    //     $html = '';
    //     foreach( $categories as $item ){
    //         $html.='<option value="'.$item->id.'">'.$item->category_name.'</option>';
    //     }
    //     return response()->json(['status'=>1,'data'=>$html]);
    // } //End Method hiya li 3edelt mais manehtajhach hit ma3endich subcategories

    public function createProduct(Request $request){
        /**
         * Vlidate the form
         * ------------
         */

         $request->validate([
            'name'=>'required|unique:products,name',
            'summary'=>'required',
            'product_image'=>'required|mimes:png,jpg,jpeg',
            'category'=>'required|exists:categories,id',
            'price'=>['required',new ValidatePrice],
            'compare_price'=>['nullable',new ValidatePrice],
         ],[
            'name.required'=>'Entrez le nom du produit',
            'name.unique'=>'Ce nom de produit est déjà pris.',
            'summary.required'=>'Écrivez un résumé pour ce produit',
            'product_image.mimes'=>'Le format de l\'image doit être png, jpg ou jpeg',
            'product_image.required'=>'Choisissez une image de produit',
            'category.exists'=>'La catégorie sélectionnée n\'est pas valide.',
            'category.required'=>'Sélectionnez la catégorie du produit',
            'price.required'=>'Entrez le prix du produit'
        ]);
        $product_image = null;
        if( $request->hasFile('product_image') ){
            $path = 'style_assets/img/products/';
            $file = $request->file('product_image');
            $filename = 'PIMG_'.time().uniqid().'.'.$file->getClientOriginalExtension();
            $upload = $file->move(public_path($path), $filename);

            if( $upload ){
                $product_image = $filename;
            }

        //SAVE PRODUCT DETAILS
        $product = new Product();
        $product->user_type = 'seller';
        $product->seller_id = auth('seller')->id();
        $product->name = $request->name;
        $product->summary = $request->summary;
        $product->category = $request->category;
        $product->price = $request->price;
        $product->compare_price = $request->compare_price;
        $product->visibility = $request->visibility;
        $product->product_image = $product_image;
        $saved = $product->save();

        if($saved){
            return response()->json(['status'=>1,'msg'=>'Le produit a été ajouté avec succès.']);
        }else{
            return response()->json(['status'=>0,'msg'=>'Quelque chose s\'est mal passé.']);
        }
    }
}

    public function allProducts(Request $request){
        $data = [
            'pageTitle'=>'Mes produits'
        ];
        return view('back.pages.seller.products',$data);
    } //End Method

    public function editProduct(Request $request){
       $product = Product::findOrFail($request->id);
       $categories = Category::orderBy('category_name','asc')->get();

        $data = [
            'pageTitle'=>'Modification du produit',
            'categories'=>$categories,
            'product'=>$product
        ];
        return view('back.pages.seller.edit-product',$data);
    } //End Method

    public function updateProduct(Request $request){
        $product = Product::findOrFail($request->product_id);
        $product_image = $product->product_image;

        /**
         * VALIDATE THE FORM
         * -----------------
         */

         $request->validate([
            'name'=>'required|unique:products,name',
            'summary'=>'required',
            'product_image'=>'nullable|mimes:png,jpg,jpeg',
            'category'=>'required|exists:categories,id',
            'price'=>['required',new ValidatePrice],
            'compare_price'=>['nullable',new ValidatePrice],
        ],[
            'name.required'=>'Entrez le nom du produit',
            'name.unique'=>'Ce nom de produit est déjà pris.',
            'summary.required'=>'Écrivez un résumé pour ce produit',
            'price.required'=>'Entrez le prix du produit'
        ]);

         //Upload product image
         if( $request->hasFile('product_image') ){
            $path = 'style_assets/img/products/';
            $file = $request->file('product_image');
            $filename = 'PIMG_'.time().uniqid().'.'.$file->getClientOriginalExtension();
            $old_product_image = $product->product_image;

            $upload = $file->move(public_path($path),$filename);

            if( $upload ){
                //Delete old product image
                if( File::exists(public_path($path.$old_product_image)) ){
                    File::delete(public_path($path.$old_product_image));
                }

                $product_image = $filename;
            }
         }

         //UPDATE PRODUCT
         $product->name = $request->name;
         $product->slug = null;
         $product->summary = $request->summary;
         $product->category = $request->category;
         $product->price = $request->price;
         $product->compare_price = $request->compare_price;
         $product->visibility = $request->visibility;
         $product->product_image = $product_image;
         $updated = $product->save();

        if( $updated ){
            return response()->json(['status'=>1,'msg'=>'Le produit a été mis à jour avec succès.']);
        }else{
            return response()->json(['status'=>0,'msg'=>'Quelque chose s\'est mal passé.']);
        }
    } //End Method

    public function deleteProduct(Request $request){
        $product = Product::findOrFail($request->product_id);

        //Delete actual product
        $path = 'style_assets/img/products/';
        $product_image = $product->product_image;
        if( $product_image != null && File::exists(public_path($path.$product_image)) ){
            File::delete(public_path($path.$product_image));
        }
        $delete = $product->delete();

        if( $delete ){
            return response()->json(['status'=>1,'msg'=>'Le produit a été supprimé avec succès.']);
        }else{
            return response()->json(['status'=>0,'msg'=>'Quelque chose s\'est mal passé.']);
        }
    }//End Method
}
