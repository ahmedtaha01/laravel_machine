<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function index(){
        // $data = [
        //     'Pregnancies' => 7,
        //     'Glucose' => 120,
        //     'BloodPressure' => 90,
        //     'SkinThickness' => 23,
        //     'Insulin' => 185,
        //     'BMI' => 28,
        //     'DiabetesPedigreeFunction' => 0.5,
        //     'Age' => 45,
        // ];
        // withBody(json_encode([$data]), 'application/json')
        $response = Http::post('http://127.0.0.1:5000/prediction',[[
            'Pregnancies' => 7,
            'Glucose' => 120,
            'BloodPressure' => 90,
            'SkinThickness' => 23,
            'Insulin' => 185,
            'BMI' => 28,
            'DiabetesPedigreeFunction' => 0.5,
            'Age' => 45,
        ]]);
        
        return $response;
    }
}
