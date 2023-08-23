<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\AcceptanceOwner;
use App\Mail\DeclineOwner;

class founderController extends Controller
{

    public function home(){

        $plans = DB::table('subscriptionplans')->get();
        return view('founder/home/home', compact('plans'));

    }

    // Function to acess to dashboard
    public function founder_dashboard()
    {
        if(Auth::user()->usertype==='founder'){
            return view('founder.dashboard');
        }else{
            return redirect()->route('/admin/404');
        }
    }

    public function newowners()
    {
        $newowners = DB::table('users')->where('status', 0)->where('usertype', 'owner')->get();
        return view('founder.newowners', compact('newowners'));
    }

    public function owners()
    {
        $owners = DB::table('users')->where('status', 1)->where('usertype', 'owner')->get();
        return view('founder.owners', compact('owners'));
    }

    public function archivedowners()
    {
        $archivedowners = DB::table('users')->where('status', 2)->where('usertype','owner')->get();
        return view('founder.archivedowners', compact('archivedowners'));
    }


    public function archive_owner($id)
    {
        $user = DB::table('users')->where('id', $id)->first();

        if ($user) {
           $update= DB::table('users')->where('id', $id)->update(['status' => 2]);
        }
        // Flash success message and redirect
        if ($update) {
            session()->flash('success', 'Owner Archived successfully!');
        } else {
            session()->flash('error', 'Failed to archive Owner.');
        }

        $userEmail = $user->email;

        // Send acceptance email
        Mail::to($userEmail)->send(new DeclineOwner($user));

        return redirect()->route('/founder/archivedowners');
    }
    /**
     * Function to redirect to edit page of owner.
     */
    public function founder_edit($id)
    {
        $users = DB::table('users')->where('id', $id)->get();

        return view('founder.updateowner', compact('users'));
    }

    /**
     * Function to edit owners
     */

    public function founder_edit_process(Request $req, $id)
    {
        // Validate the form data
        $this->validate($req, [
            'name' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required|string',
            'plan' => 'required|string',
        ]);


        // Prepare data for insertion
        $data = [
            'name' => $req->name,
            'email' => $req->email,
            'phone' => $req->phone,
            'plan' => $req->plan,
        ];

        // Update data into 'subscriptionplans' table
        $update = DB::table('users')->where('id', $id)->update($data);

        // Flash success message and redirect
        if ($update) {
            session()->flash('success', 'Owner Updated successfully!');
        } else {
            session()->flash('error', 'Failed to update Owner.');
        }

        return redirect()->route('/founder/owners');
    }

    public function chhooseplan(){

        $plans = DB::table('subscriptionplans')->get();
        return view('founder/home.plans', compact('plans'));

    }

    public function thankyou(){

        return view('founder/home.thankyou');

    }

    public function payement(){

        $basicprice = DB::table('subscriptionplans')->where('name', 'Basic')->get();
        $standardprice = DB::table('subscriptionplans')->where('name', 'Standard')->get();
        $premiumprice = DB::table('subscriptionplans')->where('name', 'Premium')->get();
        return view('founder/home.payement', compact('basicprice','standardprice','premiumprice'));

    }

    public function choosenplan(Request $req, $id, $planname){

        $data = [
            'Plan' => $planname,
        ];

         DB::table('users')->where('id', $id)->update($data);
         return redirect()->route('/founder/index/payement');
        }

    public function payementinfo(Request $req, $id){

        // Validate the form data
        $this->validate($req, [
            'creditcard' => 'required|string',
            'expirydate' => 'required|string',
            'ccv' => 'required|string',
        ]);


        // Prepare data for insertion
        $data = [
            'cardnumber' => $req->creditcard,
            'expirydate' => $req->expirydate,
            'cvc' => $req->ccv,
        ];

        DB::table('users')->where('id', $id)->update($data);
        return redirect()->route('/founder/index/thankyou');

    }

     /**
     * Function To accept owner
     */

    public function accept_owner($id)
    {
        $user = DB::table('users')->where('id', $id)->first();

        if ($user) {
           $update= DB::table('users')->where('id', $id)->update(['status' => 1]);
        }
        // Flash success message and redirect
        if ($update) {
            session()->flash('success', 'Owner Accepted successfully!');
        } else {
            session()->flash('error', 'Failed to accepte Owner.');
        }
        $userEmail = $user->email;

        // Send acceptance email
        Mail::to($userEmail)->send(new AcceptanceOwner($user));
        // Redirect back or to another page
        return redirect()->route('/founder/owners');    }



}
