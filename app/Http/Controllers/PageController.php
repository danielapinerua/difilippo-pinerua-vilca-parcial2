<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reparacion;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function create()
    {
        return view('pages.create');
    }

   /* public function store(Request $request)
    {
        Reparacion::create($request->all());

        return redirect('/reparaciones');
    }*/
}
