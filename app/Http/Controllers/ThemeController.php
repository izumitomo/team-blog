<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Requests\ThemeRequest;
use App\Theme;

class ThemeController extends Controller
{
    public function index(Theme $theme)
    {
        return view('themes/index')->with(['themes' => $theme->getPaginateByLimit()]);
    }
    
    public function make(Theme $theme)
    {
       return view('themes/{theme}/make')->with(['theme' => $theme]);
    }
    
    public function show(Theme $theme)
    {
        return view('themes/show')->with(['theme' => $theme]);
    }
    
    public function create(gotCategory $categor)
    {
        return view('themes/create')->with(['categories' => $category->get()]);;
    }
    
    public function store(ThemeRequest $request, Theme $theme)
    {
        $input = $request['theme'];
        $theme->fill($input)->save();
        return redirect('/themes/' . $theme->id);
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
