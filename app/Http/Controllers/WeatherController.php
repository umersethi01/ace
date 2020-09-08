<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\getWeatherPostRequest;
use Gmopx\LaravelOWM\LaravelOWM;

class WeatherController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getWeather()
    {
        return view('weather');
    }

    public function currentWeather(getWeatherPostRequest $request)
    {
        $lowm = new LaravelOWM();
        $current_weather = $lowm->getCurrentWeather($request['city']);

        dd($current_weather->temperature);
        // dd($current_weather->temperature->now);
    }
}
