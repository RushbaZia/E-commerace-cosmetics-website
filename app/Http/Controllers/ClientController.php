<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\AboutPage;
use App\Models\Category;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        $categories = Category::get();
        $about = AboutPage::get();
        return view('client.dashboard', compact('categories','about'));
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function about()
    // {
    //     return view('client.pages.about');
        
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        //
    }
}
