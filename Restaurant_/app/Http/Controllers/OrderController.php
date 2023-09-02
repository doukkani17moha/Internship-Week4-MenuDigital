<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    //
    public function completedorders(){
        if (!Auth::user()) {
            return redirect()->route('login');
        }

        $orders=DB::table('orders')->where('status','Completed')->get();
        return view('Admin.completing_orders',compact('orders'));


    }
    public function pendingorders(){
        if (!Auth::user()) {
            return redirect()->route('login');
        }

        $orders=DB::table('orders')->where('status','Pending')->get();
        return view('Admin.pending_orders',compact('orders'));

    }
    public function processingorders(){
        if (!Auth::user()) {
            return redirect()->route('login');
        }

        $orders=DB::table('orders')->where('status','Processing')->get();
        return view('Admin.processing_orders',compact('orders'));

    }
    public function failedorders(){
        if (!Auth::user()) {
            return redirect()->route('login');
        }

        $orders=DB::table('orders')->where('status','Failed')->get();
        return view('Admin.failed_orders',compact('orders'));


    }

    public function acceptorders(Request $req, $id){

        $update= DB::table('orders')->where('id', $id)->update(['status' => 'Processing']);
        // Flash success message and redirect
        if ($update) {
            session()->flash('success', 'Order Accepted successfully!');
        } else {
            session()->flash('error', 'Failed to accept order.');
        }
        return redirect()->route('/orders/pending');



    }

    public function declineorders(Request $req, $id){

        $update= DB::table('orders')->where('id', $id)->update(['status' => 'Failed']);

        // Flash success message and redirect
        if ($update) {
            session()->flash('success', 'Order Declined successfully!');
        } else {
            session()->flash('error', 'Failed to decline order.');
        }
        return redirect()->route('/orders/pending');



    }

    public function completeorders(Request $req, $id){

        $update= DB::table('orders')->where('id', $id)->update(['status' => 'Completed']);
        // Flash success message and redirect
        if ($update) {
            session()->flash('success', 'Order Completed successfully!');
        } else {
            session()->flash('error', 'Failed to complete order.');
        }
        return redirect()->route('/orders/processing');


    }


}
