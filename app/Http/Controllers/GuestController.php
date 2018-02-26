<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Bimmunity\Bimmodels\Models\Building;
use Bimmunity\Ticketing\Models\Profile;
use App\User;
use App\Models\Role;
use App\Country;
use App\City;

class GuestController extends Controller
{
    public function Allbuilding(){
        $buildings= Building::all();
        return view('bimunity.see-more',compact('buildings'));
    }
    public function guestindex(){
        return view('bimunity.guest');
    }
    public function AllCompanies(){
        $buildings= Profile::paginate(10);
        return view('bimunity.profile_partial',compact('buildings'));
    }
    public function propertymanagementcompanies(){
        $propertyMs=Role::with('users')->where('name', 'Property Manager')->first();
        $properties= collect();
        $properties->push($propertyMs->users);
        return view('bimunity.guest_partial',compact('properties'));
    }
    public function facilitymanagementcompanies(){
        $facilityMs= Role::with('users')->where('name', 'Facility Manager')->first();
        $properties= collect();
         $properties->push($facilityMs->users);
        return view('bimunity.guest_partial',compact('properties'));
    }
    public function serviceProvidercompanies(){
        $serviceProviders= Role::with('users')->where('name', 'Service Provider')->first();
        $properties= collect();
         $properties->push($serviceProviders->users);
        return view('bimunity.guest_partial',compact('properties'));
    }
    public function seemore(){
        $companies= Profile::all();
        return view('bimunity.guest',compact('companies'));
    }
    public function getcities($id){
        $cities = City::where('country_id','=',$id)->get();
        return view('bimunity.city',compact('cities'));
    }
    public function search($type,$country,$city,$name){
        if($type=='Property'){
            $properties= Building::where('country','=',Country::find($country)->name)
                                  ->where('city', $city)
                                  ->where('name', 'like', '%' . $name . '%')
                                  ->get();
            return view('bimunity.guest_partial_injected',compact('properties'));
        }else{
            $users= Profile::where('country', Country::find($country)->name)
                             ->where('city', $city)
                             ->get();
            $properties=collect();
            foreach($users as $user){
                if($user->user->name == $name)
                    $properties->push($user->user);
            }      
            return view('bimunity.guest_partial_injected_user',compact('properties'));
        }

    }
    public function testguest(){
        $users= Profile::where('country', 'egypt')
                             ->where('city', 'assuit')
                             ->get();                    
            $properties=collect();
            foreach($users as $user){
                if($user->user->name == 'Facility Manager')
                    $properties->push($user->user);
            }   
            return  $properties;
    }

}
