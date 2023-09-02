<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Reservation;
use Illuminate\Support\Facades\Mail;
use App\Mail\AcceptanceEmail;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


class AdminController extends Controller
{
    /**
     * Display all Admins.
     */
    public function admin_show()
    {
        if (!Auth::user()) {
            return redirect()->route('login');
        }
        $admins = DB::table('users')->get();
        return view('Admin.all_admins', compact('admins'));
    }

    /**
     * Function to redirect adding page for admin.
     */
    public function add_admin()
    {

        return view('Admin.add_admin');
    }

    /**
     * Function to add admin.
     */
    public function add_admin_process(Request $req)
    {
        // Validate the form data
        $this->validate($req, [
            'name' => 'required|string',
            'email' => 'required|string',
            'type' => 'required|string',
            'password' => 'required|string',
            'confirm_password' => 'required|string',
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);
        // checking for an existing email
        $email = DB::table('users')->where('email', $req->email)->count();
        if ($email > 0) {
            session()->flash('wrong', 'Email already registered !');
            return back();
        }
        // checking for password length
        if (strlen($req->password) < 8) {
            session()->flash('wrong', 'Password lenght at least 8 words!');
            return back();
        }
        // Confirming password
        if ($req->password != $req->confirm_password) {
            session()->flash('wrong', 'Password do not match !');
            return back();
        }

        $this->validate(request(), [
            'image' => 'mimes:jpeg,jpg,png',
        ]);

        // Handle image upload
        $uploadedfile = $req->file('image');
        $new_image = rand() . '.' . $uploadedfile->getClientOriginalExtension();
        $uploadedfile->move(public_path('/assets/images/admin/'), $new_image);
        $data = [
            'name' => $req->name,
            'email' => $req->email,
            'usertype' => $req->type,
            'profile_photo_path' => $new_image,
            'password' => Hash::make($req->password),
        ];

        $insert = DB::table('users')->Insert($data);
        // Flash success message and redirect
        if ($insert) {
            session()->flash('success', 'Admin added successfully!');
        } else {
            session()->flash('error', 'Failed to add admin.');
        }

        return redirect()->route('/admin/show');
    }



    /**
     * Function to redirect to edit page admin.
     */
    public function edit_admin($id)
    {
        $admin = DB::table('users')->where('id', $id)->get();
        return view('Admin.edit_admin', compact('admin'));
    }

    /**
     * Function to edit admin
     */
    public function edit_admin_process(Request $req, $id)
    {
        $previous_position = DB::table('users')->where('id', $id);
        // Validate the form data
        $this->validate($req, [
            'name' => 'required|string',
            'email' => 'required|string',
            'type' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
        ]);
        // Checking if new email existing
        $email = DB::table('users')->where('email', $req->email)->where('id', '!=', $id)->count();
        if ($email > 0) {
            session()->flash('wrong', 'Email already registered !');
            return back();
        }
        if ($req->hasFile('image')) {
            $uploadedfile = $req->file('image');
            $new_image = rand() . '.' . $uploadedfile->getClientOriginalExtension();
            $uploadedfile->move(public_path('/assets/images/admin/'), $new_image);
        }
        // Prepare data for insertion
        $data = [
            'name' => $req->name,
            'email' => $req->email,
            'usertype' => $req->type,
        ];
        if ($req->hasFile('image')) {
            $data['profile_photo_path'] = $new_image;
        }
        $update = DB::table('users')->where('id', $id)->Update($data);
        if ($update) {
            session()->flash('success', 'Admin updated successfully !');
        } else {
            session()->flash('wrong', 'Already same info exits !');
        }
        return redirect()->route('/admin/show');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function delete_admin($id)
    {
        $usertype = Auth::user()->usertype;
        if ($usertype != 'Sub Admin') {
            $delete = DB::table('users')->where('id', $id)->delete();
            session()->flash('success', 'Admin deleted successfully !');
        }
        return redirect()->route('/admin/show');
    }

    // Function to acess to dashboard
    public function dashboard()
    {
        if (!Auth::user()) {
            return redirect()->route('login');
        }
        if(Auth::user()->status== 1){

            $admin = DB::table('users')->count();
            $reservations = DB::table('reservations')->count();
            $sessions = DB::table('sessions')->count();
            $categories = DB::table('categories')->count();
            $chefs = DB::table('chefs')->count();
            $plats = DB::table('plats')->count();
            $reservation = DB::table('reservations')->orderByDesc('id')->take(5)->get();
            $platsdisplay = DB::table('plats')->take(5)->get();
            return view('Admin.dashboard', compact('admin','sessions', 'categories', 'chefs', 'reservations', 'reservation', 'plats', 'platsdisplay'));

        }else if (Auth::user()->status== 0){
            Auth::logout(); 
            return redirect()->route('/admin/wait');

        }else{
            return redirect()->route('/admin/404');
        }
    }
    public function nopage(){

        return view('Admin.404');
    }

    public function waitforaccept(){

        return view('Admin.waitingpage');
    }

    public function waitress()
    {
        if (!Auth::user()) {
            return redirect()->route('login');
        }

        $restaurant= Auth::user()->restaurant;
        $total_waitress = DB::table('waitress')->where('restaurant',$restaurant)->where('status',0)->count();
        $fraction = $total_waitress % 3;
        $waitress = DB::table('waitress')->where('restaurant',$restaurant)->where('status',0)->get();
        $fraction_waitress = DB::table('waitress')->where('restaurant',$restaurant)->where('status',0)->latest()->get();
        return view('Admin.waitress', compact('waitress','fraction', 'total_waitress', 'fraction_waitress'));

}

    public function comming(Request $req, $id){

        $update= DB::table('waitress')->where('id', $id)->update(['status' => 1]);
        // Flash success message and redirect
        if ($update) {
            session()->flash('success', 'Popup Send successfully!');
        } else {
            session()->flash('error', 'Failed to send popup.');
        }
        return redirect()->route('/admin/waitress');

}

    public function waiting(Request $req, $id){
        $update= DB::table('waitress')->where('id', $id)->update(['status' => 2]);
        // Flash success message and redirect
        if ($update) {
            session()->flash('success', 'Popup Send successfully!');
        } else {
            session()->flash('error', 'Failed to send popup.');
        }
        return redirect()->route('/admin/waitress');

}

}
