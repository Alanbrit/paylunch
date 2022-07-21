<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Lista\StoreRequest;
use App\Http\Requests\Lista\PutRequest;
use App\Models\Lista;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Arr;

class ListasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $escuela = Auth::user()->id_escuela;
        $lista = Lista::where('id_escuela', $escuela)->simplePaginate(7);
        return view('dashboard.listas.index', compact('lista'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $escuela = Auth::user()->id_escuela;
        $users = User::where('id_escuela', $escuela)->get()->where('rol', 'tutor');
        echo view('dashboard.lista.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        //echo dd(request("contenido"));
        //$data = array_merge($request->all(), ['id_emisor' => '5']);
        Lista::create($request->all());
        return to_route("lista.index");

    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lista  $lista
     * @return \Illuminate\Http\Response
     */
    public function show(Lista $lista)
    {
        return view("dashboard.lista.show", compact('lista'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lista  $lista
     * @return \Illuminate\Http\Response
     */
    public function edit(Lista $lista)
    {
        $escuela = Auth::user()->id_escuela;
        $users = User::where('id_escuela', $escuela)->get()->where('rol', 'tutor');

        echo view('dashboard.lista.edit', compact('users', 'lista'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lista  $lista
     * @return \Illuminate\Http\Response
     */
    public function update(PutRequest $request, Lista $lista)
    {
        $lista->update($request->validated());
        return to_route("lista.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lista  $lista
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lista $lista)
    {
        $lista->delete();
        return to_route("lista.index");
    }
}
