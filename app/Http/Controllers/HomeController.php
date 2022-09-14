<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Collection;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::where('is_published', true)->get()->take(4);
        $collections = Collection::all()->shuffle()->take(3);
        $categories = Category::where('is_published', true)->get();

        return view('home', [
            'sliders' => $sliders,
            'collections' => $collections,
            'categories' => $categories,
        ]);
    }
}
