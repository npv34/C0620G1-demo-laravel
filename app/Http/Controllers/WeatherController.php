<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function index($city = 'Hanoi')
    {
        $res = Http::get("api.openweathermap.org/data/2.5/weather?q=$city&appid=" . env('WEATHER_KEY'));
        $data = json_decode($res->body());
        $currentTemprature = $data->main->temp - 273;
        return view('weather.index', compact('currentTemprature','data'));
    }
}
