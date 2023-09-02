<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;




class CategorieController extends Controller
{
    /**
     * Display All Categories
     */
    public function categories()
    {
        if (!Auth::user()) {
            return redirect()->route('login');
        }
        $restaurant= Auth::user()->restaurant;
        $total_categories = DB::table('categories')->where('restaurant',$restaurant)->count();
        $fraction = $total_categories % 3;
        $categories = DB::table('categories')->where('restaurant',$restaurant)->get();
        $fraction_categories = DB::table('categories')->latest()->where('restaurant',$restaurant)->get();
        return view('Admin.all_categories', compact('categories','fraction', 'total_categories', 'fraction_categories'));

    }

    /**
     * Function to redirect to page to add categorie.
     */
    public function add_categorie()
    {
        return view('Admin.add_categorie');
    }
    /**
     * Function to add a categorie
     */
    public function categorie_add_process(Request $req)
    {

        // Validate the form data
        $this->validate($req, [
            'name' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        // Handle image upload
        $uploadedfile = $req->file('image');
        $new_image = rand() . '.' . $uploadedfile->getClientOriginalExtension();
        $uploadedfile->move(public_path('/admin/assets/images/categories/'), $new_image);
        $restaurant= Auth::user()->restaurant;

        $data = [
            'category_name' => $req->name,
            'category_descr' => $req->description,
            'category_img' => $new_image,
            'restaurant' => $restaurant,

        ];

        $insert = DB::table('categories')->insert($data);
        // Flash success message and redirect
        if ($insert) {
            session()->flash('success', 'Categorie added successfully!');
        } else {
            session()->flash('error', 'Failed to add categorie.');
        }
        return redirect()->route('/admin/categories');
    }

    /**
     * Function to redirect to edit page of categorie.
     */
    public function categorie_edit($id)
    {
        $categories = DB::table('categories')->where('id', $id)->get();

        return view('Admin.edit_categorie', compact('categories'));
    }

    /**
     * Function to edit Categorie.
     */
    public function categorie_edit_process(Request $req, $id)
    {
         // Validate the form data
         $this->validate($req, [
            'name' => 'required|string',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        if ($req->hasFile('image')) {
            $uploadedfile = $req->file('image');
            $new_image = rand() . '.' . $uploadedfile->getClientOriginalExtension();
            $uploadedfile->move(public_path('/admin/assets/images/categories/'), $new_image);
        }
         // Prepare data for insertion
         $data = [
            'category_name' => $req->name,
            'category_descr' => $req->description,
        ];
        if ($req->hasFile('image')) {
            $data['category_img'] = $new_image;
        }

        $update = DB::table('categories')->where('id', $id)->update($data);
        // Flash success message and redirect
        if ($update) {
            session()->flash('success', 'Categorie updated successfully!');
        } else {
            session()->flash('error', 'Failed to update categorie.');
        }
        return redirect()->route('/admin/categories');
    }


    /**
     * Function to delete Categorie.
     */
    public function categorie_delete_process($id)
    {
        $usertype = Auth::user()->usertype;
        if ($usertype != 'Sub Admin') {
            $delete = DB::table('categories')->where('id', $id)->delete();
            session()->flash('success', 'Categorie deleted successfully !');
        }
        return back();
    }
}
