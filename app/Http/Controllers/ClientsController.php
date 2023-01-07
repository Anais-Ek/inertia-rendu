<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Inertia\Inertia;


class ClientsController extends Controller
{
    public function index()
    {
        return Inertia::render("Clients/Index", [
            'pageTitle' => 'Page Client',
            'clients'     => Client::all()

        ]);
    }

    public function create()
    {
        return Inertia::render("Clients/Create");
    }


    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required',
            'description'   => 'required',
            'statut' => 'required',
            'capital'=> 'required',
            'siret' => 'required',
            'naf' => 'required',
            'country' => 'required',
            'adress' => 'required',
            'postal' => 'required',
            'city' => 'required',
    
        ]);

        Client::create($request->only(['name', 'description','statut','capital','siret','naf','country','adress','postal','city']));

        return redirect()->route('clients.index');
    }


}
