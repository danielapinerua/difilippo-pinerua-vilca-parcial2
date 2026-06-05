<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }



   /* public function store(Request $request)
    {
        Reparacion::create($request->all());

        return redirect('/reparaciones');
    }*/
}
