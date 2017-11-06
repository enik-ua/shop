<?php

namespace App\Http\Controllers;

use App\Catalog;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catalogs = Catalog::all();

        return view('catalogindex')->with('catalogs',$catalogs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('catalogcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request::all();
        $catalog = new Catalog;
        $catalog->name = $input['name'];
        $catalog->modified = $input['modified'];
        $catalog->programId = $input['programId'];
        $catalog->programName = $input['programName'];
        $catalog->price = $input['price'];
        $catalog->currency = $input['currency'];
        $catalog->descriprion = $input['descriprion'];
        $catalog->manufacturer = $input['manufacturer'];
        $catalog->ean = $input['ean'];
        $catalog->image = $input['image'];
        $catalog->priceOld = $input['priceOld'];
        $catalog->shippingCosts = $input['shippingCosts'];
        $catalog->merchantCategory = $input['merchantCategory'];
        $catalog->merchantEmail = $input['merchantEmail'];
        
        return redirect('articles');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Catalog  $catalog
     * @return \Illuminate\Http\Response
     */
    public function show(Catalog $catalog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Catalog  $catalog
     * @return \Illuminate\Http\Response
     */
    public function edit(Catalog $catalog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Catalog  $catalog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Catalog $catalog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Catalog  $catalog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Catalog $catalog)
    {
        //
    }
}
