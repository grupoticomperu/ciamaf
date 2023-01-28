<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Work;
use App\Models\About;
use App\Models\Marca;
use App\Models\Categoria;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use App\Models\Configuration;
use App\Models\Subcategoryhosting;
use App\Models\Subcategoryservice;

class AboutsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marcas = Marca::where('state', 1)->get();
        $abouts = About::all()->first();
        $configurations = Configuration::all()->first();
        //$categoriesproductos = Categoria::all();
        $subcategories = Subcategory::where('state', 1)
                            ->where('categoria_id', 1)->get();
        //$subcategories = Subcategoryservice::where('categoryservice_id', 1)->get();
       // $subcategoriesd = Subcategoryhosting::where('categoryhosting_id', 1)->get();
        $teams = Team::where('state', 1)->get();
        $works = Work::latest('id')->get();

        return view('famaicabout', compact('abouts','configurations','subcategories','teams', 'works', 'marcas'));
    }



    public function store(Request $request)
    {
        //
    }


    public function show(About $about)
    {
        //
    }


    public function edit(About $about)
    {
        //
    }


    public function update(Request $request, About $about)
    {
        //
    }


    public function destroy(About $about)
    {
        //
    }
}
