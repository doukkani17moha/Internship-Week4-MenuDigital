<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Plat;
use Illuminate\Support\Facades\Response;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


class PlatController extends Controller
{
    /**
     * Function to Display all Plats
     */
    public function food_menu()
    {
        if (!Auth::user()) {
            return redirect()->route('login');
        }
        $total_plats = DB::table('plats')->count();
        $fraction = $total_plats % 3;
        $plats = DB::table('plats')->get();
        $fraction_plats = DB::table('plats')->latest()->get();
        return view('Admin.all_plats', compact('plats', 'fraction', 'total_plats', 'fraction_plats'));
    }

    /**
     * Function to redirect to page of adding plat
     */
    public function add_menu()
    {
        $categories = DB::table('categories')->get();
        return view('Admin.add_plat', compact('categories'));
    }

    /**
     * Function to add plat.
     */
    public function menu_add_process(Request $req)
    {
        // Validate the form data
        $this->validate($req, [
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'category' => 'required|exists:categories,id',
            'ptime' => 'required|string',
            'available' => 'required|string',
            'rating' => 'numeric',
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        // Handle negative price case
        if ($req->price < 0) {
            session()->flash('wrong', 'Negative Price value is not accepted!');
            return back();
        }

        // Handle image upload
        $uploadedfile = $req->file('image');
        $new_image = rand() . '.' . $uploadedfile->getClientOriginalExtension();
        $uploadedfile->move(public_path('/assets/images/plats/'), $new_image);

        // Prepare data for insertion
        $data = [
            'plat_name' => $req->name,
            'plat_descr' => $req->description,
            'plat_price' => $req->price,
            'categorie_id' => $req->category,
            'plat_time' => $req->ptime,
            'plat_avail' => $req->available,
            'rating' => $req->rating,
            'plat_img' => $new_image,
        ];

        // Insert data into 'plats' table
        $insert = DB::table('plats')->insert($data);

        // Flash success message and redirect
        if ($insert) {
            session()->flash('success', 'Plat added successfully!');
        } else {
            session()->flash('error', 'Failed to add plat.');
        }

        return redirect()->route('/admin/food-menu');
    }



    /**
     * Function to redirect to edit page of plat.
     */
    public function menu_edit($id)
    {
        $plats = DB::table('plats')->where('id', $id)->get();
        $categories = DB::table('categories')->get();
        return view('Admin.edit_plat', compact('plats', 'categories'));
    }

    /**
     * Function to edit plat.
     */
    public function menu_edit_process(Request $req, $id)
    {
        $this->validate($req, [
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'category' => 'required|exists:categories,id',
            'ptime' => 'required|string',
            'available' => 'required|string',
            'rating' => 'numeric',
            'image' => 'nullable|image|mimes:jpeg,jpg,png|max:2048', // Make the image field nullable
        ]);

        if ($req->price < 0) {
            session()->flash('wrong', 'Negative Price value do not accept !');
            return back();
        }

        // Only handle image upload if a new image is provided
        if ($req->hasFile('image')) {
            $uploadedfile = $req->file('image');
            $new_image = rand() . '.' . $uploadedfile->getClientOriginalExtension();
            $uploadedfile->move(public_path('/assets/images/plats/'), $new_image);
        }

        // Prepare data for insertion
        $data = [
            'plat_name' => $req->name,
            'plat_descr' => $req->description,
            'plat_price' => $req->price,
            'categorie_id' => $req->category,
            'plat_time' => $req->ptime,
            'plat_avail' => $req->available,
            'rating' => $req->rating,
        ];

        // Update data into 'plats' table
        if ($req->hasFile('image')) {
            $data['plat_img'] = $new_image;
        }

        $update = DB::table('plats')->where('id', $id)->update($data);

        // Flash success message and redirect
        if ($update) {
            session()->flash('success', 'Plat Updated successfully!');
        } else {
            session()->flash('error', 'Failed to update plat.');
        }

        return redirect()->route('/admin/food-menu');
    }


    /**
     * Function to delete plat.
     */
    public function menu_delete_process($id)
    {
        $usertype = Auth::user()->usertype;
        if ($usertype != 'Sub Admin') {
            $delete = DB::table('plats')->where('id', $id)->delete();
            session()->flash('success', 'Plat  deleted successfully !');
        }
        return redirect()->route('/admin/food-menu');
    }
    /**
     * Function to disable or enable a plat
     */

    public function toggleEnableDisable(Request $request)
    {
        $id = $request->input('id');
        $action = $request->input('action');

        $plat = Plat::find($id);

        if ($plat) {
            $plat->enable = $action === 'enable' ? 1 : 0;
            $plat->save();

            $message = $plat->enable ? 'Plat enabled successfully!' : 'Plat disabled successfully!';
            session()->flash('success', $message);
        }

        return redirect()->route('/admin/food-menu');
    }
    /**
     * Function for search plats
     */
    public function menu_search_process(Request $request)
    {
        $searchTerm = $request->input('search_term');

        $searchResults = DB::table('plats')
            ->where('plat_name', 'LIKE', '%' . $searchTerm . '%')
            ->get();

        $total_plats = DB::table('plats')->count();
        $fraction = $total_plats % 3;
        $plats = DB::table('plats')->get();
        $fraction_plats = DB::table('plats')->latest()->get();


        return view('Admin.search', compact('searchResults', 'plats', 'fraction', 'total_plats', 'fraction_plats'));
    }

}
