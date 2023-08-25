<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{

    public function index()
{

    $plats = DB::table('plats')->where('enable', 1)->limit(8)->get();
    $Data = DB::table('template')->where('restaurant','index')->get();
    return view("home", compact('plats','Data'));
}

public function index2($id)
{
    $plats = DB::table('plats')->where('enable', 1)->limit(8)->get();
    $Data = DB::table('template')->where('restaurant',$id)->get();
    return view("homeowner", compact('plats','Data'));

}


    public function reservation_confirm(Request $req)
    {
         // Validate the form data
         $this->validate($req, [
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'no_guest' => 'required|string',
            'date' => 'required|string',
            'time' => 'required|string',
            'message' => 'required|string',
        ]);

        $data = [
            'reserv_name' => $req->name,
            'reserv_email' => $req->email,
            'reserv_phone' => $req->phone,
            'no_guest' => $req->no_guest,
            'reserv_date' => $req->date,
            'reserv_time' => $req->time,
            'reserv_msg' => $req->message,
        ];
        DB::table('reservations')->insert($data);
        return redirect('/')->with('success', 'Reservation submitted successfully, We gonna contact you soon as possible!');
    }

    /**
     * function to display menu
     */
    public function menu(){
        $plats = DB::table('plats')->where('enable', 1)->get();
        $Data = DB::table('template')->get();
        $categories = DB::table('categories')->get();
        $platsByCategory = [];

        foreach ($categories as $category) {
            $platsByCategory[$category->id] = DB::table('plats')
                ->where('enable', 1)
                ->where('categorie_id', $category->id)
                ->get();
        }

        return view('menu', compact('plats', 'categories', 'platsByCategory','Data'));
    }


    public function about(){
        $chefs = DB::table('chefs')->limit(4)->get();
        $Data = DB::table('template')->get();
        return view('about', compact('chefs','Data'));
    }
    public function contact(){
        $Data = DB::table('template')->get();
        return view('contact', compact('Data'));
    }
    public function reservation(){
        $Data = DB::table('template')->get();
        return view('reservation', compact('Data'));
    }

    public function callwaitress(Request $req){
        $data = [
            'datetime_created' => now(),
        ];
         DB::table('waitress')->insert($data);
        return redirect()->route('menu')->with('me', 'The waitress will coming Now');

    }



}
