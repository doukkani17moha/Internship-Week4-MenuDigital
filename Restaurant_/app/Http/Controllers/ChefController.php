<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ChefController extends Controller
{
    /**
     * Display All Chefs
     */
    public function chefs()
    {
       if (!Auth::user()) {
            return redirect()->route('login');
         }
        $total_chefs = DB::table('chefs')->count();
        $fraction = $total_chefs % 3;
        $chefs = DB::table('chefs')->get();
        $fraction_chefs = DB::table('chefs')->latest()->get();
        return view('Admin.all_chefs', compact('chefs', 'fraction', 'total_chefs', 'fraction_chefs'));

    }

    /**
     * Function to redirect to page to add chef.
     */
    public function add_chef()
    {
        return view('Admin.add_chef');
    }
    /**
     * Function to add a chef
     */
    public function chef_add_process(Request $req)
    {

                // Validate the form data
                $this->validate($req, [
                    'name' => 'required|string',
                    'job' => 'required|string',
                    'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
                ]);

                        // Handle image upload
        $uploadedfile = $req->file('image');
        $new_image = rand() . '.' . $uploadedfile->getClientOriginalExtension();
        $uploadedfile->move(public_path('/assets/images/chefs/'), $new_image);

        // Prepare data for insertion
        $data = [
            'chef_name' => $req->name,
            'chef_job' => $req->job,
            'chef_img' => $new_image,
        ];

        // Insert data into 'plats' table
        $insert = DB::table('chefs')->Insert($data);

        // Flash success message and redirect
        if ($insert) {
            session()->flash('success', 'Chef added successfully!');
        } else {
            session()->flash('error', 'Failed to add chef.');
        }

        return redirect()->route('/admin/chefs');
    }

    /**
     * Function to redirect to edit page of chef.
     */
    public function chef_edit($id)
    {
        $chefs = DB::table('chefs')->where('id', $id)->get();

        return view('Admin.edit_chef', compact('chefs'));
    }

    /**
     * Function to edit Chef.
     */
    public function chef_edit_process(Request $req, $id)
    {
         // Validate the form data
         $this->validate($req, [
            'name' => 'required|string',
            'job' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        if ($req->hasFile('image')) {
            $uploadedfile = $req->file('image');
            $new_image = rand() . '.' . $uploadedfile->getClientOriginalExtension();
            $uploadedfile->move(public_path('/assets/images/chefs/'), $new_image);
        }
         // Prepare data for insertion
         $data = [
            'chef_name' => $req->name,
            'chef_job' => $req->job,
        ];
        if ($req->hasFile('image')) {
            $data['chef_img'] = $new_image;
        }
        // Update data into 'chefs' table
        $update = DB::table('chefs')->where('id', $id)->update($data);
        // Flash success message and redirect
        if ($update) {
            session()->flash('success', 'Chef Updated successfully!');
        } else {
            session()->flash('error', 'Failed to update chef.');
        }
        return redirect()->route('/admin/chefs');
    }


    /**
     * Function to delete chef.
     */
    public function chef_delete_process($id)
    {
      $usertype = Auth::user()->usertype;
      if ($usertype != 'Sub Admin') {
        $delete = DB::table('chefs')->where('id', $id)->delete();
        session()->flash('success', 'Chef deleted successfully !');
      }
      return redirect()->route('/admin/chefs');
    }
}
