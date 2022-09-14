<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collection;

class CollectionController extends Controller
{
    public function index()
    {
        $collections = Collection::where('is_published', true)->paginate(12);

        return view('collections', [
            'collections' => $collections,
        ]);
    }

    public function show($slug)
    {
        $collection = Collection::where('slug', $slug)->first();
        $random_collections = Collection::where('is_published', true)->whereNot('slug', $collection->slug)->get()->shuffle()->take(3);

        return view('collection_detail', [
            'collection' => $collection,
            'random_collections' => $random_collections,
        ]);
    }
}
