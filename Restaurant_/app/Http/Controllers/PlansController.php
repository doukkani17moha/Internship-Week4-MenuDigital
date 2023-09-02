<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PlansController extends Controller
{
    /**
     * Display all Plans.
     */
    public function plans_show()
    {
        $plans = DB::table('subscriptionplans')->get();
        return view('founder.plans', compact('plans'));
    }

     /**
     * Function to redirect to edit page of plans.
     */
    public function plans_edit($id)
    {
        $plans = DB::table('subscriptionplans')->where('id', $id)->get();

        return view('founder.updateplans', compact('plans'));
    }
    /**
     * Function to edit plans
     */

    public function plans_edit_process(Request $req, $id)
{
    // Validate the form data
    $this->validate($req, [
        'name' => 'required|string',
        'price' => 'required|string',
        'description' => 'required|string',
        'features' => 'nullable|array', // Validate the features field as an array
    ]);

    // Join features array into a single string with line breaks
    $featuresString = implode("\n", $req->features);

    // Prepare data for insertion
    $data = [
        'name' => $req->name,
        'price' => $req->price,
        'description' => $req->description,
    ];
      // Add features data if available
    if (!empty($featuresString)) {
        $data['features'] = $featuresString;
    }
    // Update data into 'subscriptionplans' table
    $update = DB::table('subscriptionplans')->where('id', $id)->update($data);

    // Flash success message and redirect
    if ($update) {
        session()->flash('success', 'Subscription Plan Updated successfully!');
    } else {
        session()->flash('error', 'Failed to update Subscription Plan.');
    }

    return redirect()->route('/founder/plans'); // Correct the route name
}

    /**
     * function to upgrade to standard plan
     */

     public function upgradetostandard($id) {

        $user = DB::table('users')->where('id', $id)->get();
        if ($user) {
            // Code to update user's plan to standard in the database
             DB::table('users')->where('id', $id)->update(['Plan' => 'Standard']);
             return redirect('/founder/index/payement');

        } else {
            // User not found, handle the error accordingly
            return redirect('admin/dashboard')->with('error', 'User not found');
        }


     }

     /**
     * function to upgrade to premium plan
     */

     public function upgradetopremium($id) {

        $user = DB::table('users')->where('id', $id)->get();
        if ($user) {
            // Code to update user's plan to standard in the database
             DB::table('users')->where('id', $id)->update(['Plan' => 'Premium']);
             return redirect('/founder/index/payement');

        } else {
            // User not found, handle the error accordingly
            return redirect('admin/dashboard')->with('error', 'User not found');
        }

     }

}
