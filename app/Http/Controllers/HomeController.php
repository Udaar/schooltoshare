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
      
            return redirect('home');
    }
    public function dashboard()
    {
        
        $buildings = \Bimmunity\Bimmodels\Models\Building::all()->take(8);
        $events=\App\Models\Event::all()->take(8);
        app('App\Http\Controllers\OptionController')->generateToken();
        $BimModel=\App\Models\BimModel::find(1);
        $requests=\App\Models\Request::all();
        if($BimModel){
            $urn=$BimModel->urn;
        }
        $token=\App\Models\Option::where('name','forge_data_read_token')->first();
        if($token){
            $token=$token->value;
        }
        $invoice=\Bimmunity\Invoice\Models\Invoice::all();
        $funds=\App\User::where('type','fundorg')->get(); 
        if(\Auth::check()){
            if(\Auth::user()->type == 'school'){
                    if(!\Auth::user()->school){
                        return redirect('/buildings/create');
                    }
                    else{
                        $requests=\Auth::user()->school->requests;
                        $notifications =\Auth::user()->notifications()->orderBy('created_at', 'desc')->paginate(20);
                        return view('home' ,compact('requests','buildings', 'urn', 'token','funds','invoice','notifications'));
                    }
                        
                
            }
                
            elseif(\Auth::user()->type == 'admin')
                return "Admin";
            elseif(\Auth::user()->type == 'government'){
                $buildings =\Auth::user()->govschool;
                $requests=collect();
                foreach($buildings as $building){
                    
                    if(count($building->requests))
                        $requests->push($building->requests);
                }
                $notifications =\Auth::user()->notifications()->orderBy('created_at', 'desc')->paginate(20);
                return view('gov.home' ,compact('requests','buildings', 'urn', 'token','funds','invoice','notifications'));

            }
            elseif(\Auth::user()->type == 'fundorg'){
                $buildings =\Auth::user()->fundschools;
                $notifications =\Auth::user()->notifications()->orderBy('created_at', 'desc')->paginate(20);
                return view('fund.home' ,compact('requests','buildings', 'urn', 'token','funds','invoice','notifications'));
                
            }
            else{
                $requests=\Auth::user()->requests;
                return view('child.home',compact('buildings','events','requests'));
            } 
        }    
       else
            return view('child.home',compact('buildings','events'));
    }
   
}
