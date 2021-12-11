<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\District;

class CityDistrictController extends Controller
{
    //City
    public function getAllCity(){
        return response()->json(City::all(), 200);
    }

    public function getByIdCity($id){
        $city = City::find($id);
        
        if (is_null($city)) {
            return response()->json(['message' => 'City Not Found'], 404);
        }

        return response()->json($city, 200);
    }


    //District
    public function getAllDistrict(){
        return response()->json(District::all(), 200);
    }

    public function getByIdDistrict($id){
        $district = District::find($id);
        
        if (is_null($district)) {
            return response()->json(['message' => 'District Not Found'], 404);
        }

        return response()->json($district, 200);
    }

    public function getByCityDistrict($cityId){
        $district = District::where('CityId', $cityId)->get();
        
        if (is_null($district)) {
            return response()->json(['message' => 'District Not Found'], 404);
        }

        return response()->json($district, 200);
    }
}
