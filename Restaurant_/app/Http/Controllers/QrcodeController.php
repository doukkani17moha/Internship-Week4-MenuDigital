<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Response;

class QrcodeController extends Controller
{
    public function qrcode(){
        if (!Auth::user()) {
            return redirect()->route('login');
         }
         return view('Admin.addqrcode');


    }
    /**
     * Function to generate a qrcode
     */
    public function generate(Request $req) {

        // Validate the form data
        $this->validate($req, [
            'url' => 'required|string',
        ]);
        $url= $req->url;
  // add the string in the Google Chart API URL
  $qrcode = "https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=".$url."&choe=UTF-8";

    	return view("Admin.addqrcode", compact('qrcode'));
    }


}




