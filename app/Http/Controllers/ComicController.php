<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //dd(Comic::all());
        $comics = Comic::orderByDesc('id')->paginate(8);        
        $footer_links = config("links.footer_links");
        $icons = config("links.social_icons");
        $data = [
            "comics" => $comics,
            "footer_links" => $footer_links,
            "icons" => $icons
        ];
        return view('comics.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {        
        $footer_links = config("links.footer_links");
        $icons = config("links.social_icons");
        $data = [
            "footer_links" => $footer_links,
            "icons" => $icons
        ];
        return view('comics.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreComicRequest $request)
    {

        //data validation
        /* $val_data = $request->validate([
            'title' => 'required|min:3|max:50',
            'thumb' => 'required|min:10|max:255',
            'description' => 'nullable|max:800',
            'price' => 'nullable|max:10',
            'series' => 'nullable|max:50',
            'sale_date' => 'nullable|max:10',
            'type' => 'nullable|max:25'
        ]); */

        $val_data = $request->validated();

        //dd($request->all());
        //$data = $request->all();
        Comic::create($val_data);

        return to_route('comics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {        
        $footer_links = config("links.footer_links");
        $icons = config("links.social_icons");
        $data = [
            "comic" => $comic,
            "footer_links" => $footer_links,
            "icons" => $icons
        ];
        return view('comics.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {        
        $footer_links = config("links.footer_links");
        $icons = config("links.social_icons");
        $data = [
            "comic" => $comic,
            "footer_links" => $footer_links,
            "icons" => $icons
        ];
        return view('comics.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateComicRequest $request, Comic $comic)
    {
        //data validation
        /* $val_data = $request->validate([
            'title' => 'required|min:3|max:50',
            'thumb' => 'required|min:10|max:255',
            'description' => 'nullable|max:800',
            'price' => 'nullable|max:10',
            'series' => 'nullable|max:50',
            'sale_date' => 'nullable|max:10',
            'type' => 'nullable|max:25'
        ]); */

        $val_data = $request->validated();

        $comic->update($val_data);
        return to_route('comics.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return to_route('comics.index');
    }
}
