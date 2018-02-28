<?php

namespace Bimmunity\Guest\Http\Controllers;

use Illuminate\Http\Request;
use Bimmunity\Bimmodels\Models\Building;
use Bimmunity\Ticketing\Models\Profile;
use App\User;
use App\Models\Role;
use App\Country;
use App\Http\Controllers\Controller;
use App\City;

class GuestController extends Controller
{
    public function guestindex(){
        return view('guest::guest');
    }
    public function AllCompanies(){
        $properties=Building::paginate(10);
        return view('guest::profile_partial',compact('properties'));
    }
    public function propertymanagementcompanies(){
        $properties= User::where('type','PM')->get();
        $type='Property Manager';
        return view('guest::guest_partial',compact('properties','type'));
    }
    public function facilitymanagementcompanies(){
        $properties= User::where('type','FM')->get();
        $type='Facility Manager';
        
        return view('guest::guest_partial',compact('properties','type'));
    }
    public function serviceProvidercompanies(){
        $properties= User::where('type','SP')->get();
        $type='Service Provider';
        return view('guest::guest_partial',compact('properties','type'));
    }
    public function seemore($type){
        $searchtype=$type;
        if($type=='Properties'){
            $properties= Building::all();
            $searchtype='Property';
            return view('guest::see-more',compact('properties','type','searchtype'));
        }
        else{
        
        $events=\App\Models\Event::all();
        $searchtype='Event';
         return view('guest::see-more',compact('events','type','searchtype'));
        }
        
    }
    public function getcities($id){
         $country = Country::find($id);
         $cities=$country->cities;
        return view('guest::city',compact('cities'));
    }
    public function search($country_id,$city_id,$name){
       /*
        // if($type=='Property'){
        //     $properties= Building::where('country','=',Country::find($country)->name)
        //                           ->where('city', $city)
        //                           ->where('name', 'like', '%' . $name . '%')
        //                           ->get();
        //     return view('guest::guest_partial_injected',compact('properties'));
        // }else{
        //     $users= Profile::where('country', Country::find($country)->name)
        //                      ->where('city', $city)
        //                      ->get();
        //     $properties=collect();
        //     foreach($users as $user){
        //         if($user->user->name == $name)
        //             $properties->push($user->user);
        //     }      
        //     return view('guest::guest_partial_injected_user',compact('properties','type'));
        // }
       */
      if($country_id != 0 && $city_id != 0 && $name != "null")
      {
        $properties= Building::where('country','=',$country_id)
                                  ->where('city', $city_id)
                                  ->where('name', 'like', '%' . $name . '%')
                                  ->get();
            // return $schools;
      }
      elseif($country_id != 0 && $city_id != 0 && $name == "null")
      {
        $properties= Building::where('country','=',$country_id)
                            ->where('city', $city_id)
                            ->get();
        // return $schools;
      }
      else
      {
        $properties= Building::where('name', 'like', '%' . $name . '%')->get();
        // return $schools;
      }
            return view('guest::guest_partial_injected',compact('properties'));
    }
    public function testguest(){
        
            $user = User::first();
            $building = Building::first();

            $rating = $building->rating([
                'rating' => 5
            ], $user);

            return $rating;
    }
    public function show($type,$id,$domain=""){
        if($type=='Property'){
            $building = Building::find($id);
            return view('guest::property_profile',compact('building'));
        }
        else{
            $user= User::where('id',$id)->first();
            return view('guest::company_profile',compact('user'));
        }
    }
    

}
