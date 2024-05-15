<?php

namespace App\Http\Controllers;

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
        $comics = Comic::all();
        $banner_links = config("links.banner_links");
        $footer_links = config("links.footer_links");
        $icons = config("links.social_icons");
        $data = [
            "comics" => $comics,
            "banner_links" => $banner_links,
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
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $data = $request->all();
        Comic::create($data);

        return to_route('comics.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        $banner_links = config("links.banner_links");
        $footer_links = config("links.footer_links");
        $icons = config("links.social_icons");
        $data = [
            "comic" => $comic,
            "banner_links" => $banner_links,
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        //
    }
}
