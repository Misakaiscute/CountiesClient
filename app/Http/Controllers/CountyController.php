<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class CountyController extends Controller
{
    function index(){
        $response = Http::api()->get('counties');
        if ($response->status() != Response::HTTP_OK){
            return view('404', ['message' => json_decode($response->body())->message]);
        }
        $data = json_decode($response->body())->data;

        return view("counties", ["data" => $data]);
    }
    function oneCounty($id){
        $countyResponse = Http::api()->get("counties/{$id}");
        if ($countyResponse->status() != Response::HTTP_OK){
            return view('404', ['message' => json_decode($countyResponse->body())->message]);
        }
        $countyData = json_decode($countyResponse->body())->data;

        $citiesResponse = Http::api()->get("counties/{$id}/cities");
        if ($citiesResponse->status() != Response::HTTP_OK){
            return view("cities",
                ["countyData" => $countyData,
                 "citiesData" => [],
            ]);
        }
        $citiesData = json_decode($citiesResponse->body())->data;

        return view("cities",
            ["countyData" => $countyData,
             "citiesData" => $citiesData
        ]);
    }
    function insert($name, $population, $chiefTown){
        $request = json_encode([
            'name' => $name,
            'flag' => $name . "_flag",
            'coat_of_arms' => $name . "_coa",
            'population' => $population,
            'chief_town' => $chiefTown,
        ]);
    }
    function delete(){

    }
}
