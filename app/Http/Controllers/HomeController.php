<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use Flash;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function index()
    {
        return view('bimunity.index');
    }
    public function dashboard()
    {
        
        $buildings = \Bimmunity\Bimmodels\Models\Building::all();
        $events=\App\Models\Event::all();
        app('App\Http\Controllers\OptionController')->generateToken();
        $BimModel=\App\Models\BimModel::where('name','tower')->first();
        if($BimModel){
            $urn=$BimModel->urn;
        }
        $token=\App\Models\Option::where('name','forge_data_read_token')->first();
        if($token){
            $token=$token->value;
        }
        $invoice=\Bimmunity\Invoice\Models\Invoice::all();
        $funds=\App\User::where('type','fundorg')->get(); 
        $notifications =\Auth::user()->notifications()->orderBy('created_at', 'desc')->paginate(20);
        if(\Auth::user()->type == 'school')
            return view('home' ,compact('buildings', 'urn', 'token','funds','invoice','notifications'));
        elseif(\Auth::user()->type == 'admin')
            return "Admin";
        elseif(\Auth::user()->type == 'government')
            return "government";
        elseif(\Auth::user()->type == 'children')
            return view('child.home',compact('buildings','events'));
        elseif(\Auth::user()->type == 'fundorg')  
            return "fundorg";  
       else
            return "guest";
    }
   
}
