<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\AdminSession;

class SessionController extends Controller
{
    public function storeAdminSession(Request $request)
    {
        $user = Auth::user();

        $data = [
            'user_id' => $user->id,
            'ip_address' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'payload' => json_encode($request->session()->all()),
            'last_activity' => time(),

        ];
        $insert = DB::table('sessions')->Insert($data);
        // return redirect()->route('/admin/dashboard');
    }

    public function allsessions(Request $request)
    {
        if (!Auth::user()) {
            return redirect()->route('login');
        }
        $sessions=DB::table('sessions')->get();
        return view('Admin.all_sessions',compact('sessions'));
    }
}

