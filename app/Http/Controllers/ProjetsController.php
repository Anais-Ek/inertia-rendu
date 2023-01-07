<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use Illuminate\Http\Request;
use Inertia\Inertia;


class ProjetsController extends Controller
{
    public function index()
    {
        return Inertia::render("Projets/Index", [
            'pageTitle' => 'Page projets',
            'projets'     => Projet::all()

        ]);
    }

    public function create()
    {
        return Inertia::render("Projets/Create");
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required',
            'sname'   => 'required',
            'phone' => 'required',
            'email'=> 'required',
            'title' => 'required',
            'description' => 'required',
            'debut' => 'required',
            'fin' => 'required',
            'status' => 'required',
            'nbjours' => 'required',
    
        ]);

        Projet::create($request->only(['name', 'sname','phone','email','title','description'
        ,'debut','fin','status','nbjours']));

        return redirect()->route('projets.index');
    }


}
