<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Requests\ThemeRequest;
use App\Answer;
use App\Theme;

class ThemeController extends Controller
{
    public function index(Theme $theme)
    {
        return view('themes/index')->with([
        'themes' => $theme->getPaginateByLimit(),
        ]);
    }

    
    public function rainy(Theme $theme){
        $client = new \GuzzleHttp\Client();
        
        $url= 'https://www.jma.go.jp/bosai/forecast/data/forecast/130000.json';
        $response = $client->request(
            'GET',
            $url,
        );
            
        $weather = json_decode($response->getBody(), true);
        
        //dd($weather[0]["timeSeries"][0]["areas"][0]["weathers"][0]);
        $today_tokyo_weather = $weather[0]["timeSeries"][0]["areas"][0]["weathers"][0];
        if (strpos($today_tokyo_weather, "雨") !== false){
            return view('themes/rainy_index')->with([
            'themes' => $theme->getPaginateByLimit(),
            "weather" => $weather
            ]);
        }else{
            return view('themes/index')->with([
            'themes' => $theme->getPaginateByLimit(),
            "weather" => $weather
            ]);
        }
    }
    
    public function make(Theme $theme)
    {
       return view('themes/{theme}/make')->with(['theme' => $theme]);
    }
    
    public function show(Theme $theme, Answer $answer)
    {
//        dd($answer->get());
        $id = $theme->id;
        $answers = $answer->where("theme_id", $id)->get();

        return view('themes/show')->with(['theme' => $theme, "answers" => $answers]);
    }
    
    public function create(gotCategory $categor)
    {
        return view('themes/create')->with(['categories' => $category->get()]);;
    }
    
    public function store(Request $request, Answer $answer, $theme)
    {
        $input = $request -> all();
        $input += ["theme_id"=>$theme];
        //dd($answer);
        $answer->fill($input)->save();
        return redirect('/themes/' . $theme);
    }
    
    public function edit(Theme $theme)
    {
        return view('themes/edit')->with(['theme' => $theme]);
    }
    
    public function update(ThemeRequest $request, Theme $theme)
    {
        $input_theme = $request['theme'];
        $theme->fill($input_theme)->save();
        
        return redirect('/themes/' . $theme->id);
    }
    
    public function delete(Theme $theme)
    {
        $theme->delete();
        return redirect('/');
    }
    
}
