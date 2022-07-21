<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Menu\StoreRequest;
use App\Http\Requests\Menu\PutRequest;
use App\Models\School;
use App\Models\Menu;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $escuela = Auth::user()->id_escuela;
        $menus = Menu::where('id_escuela', $escuela)->simplePaginate(7);
        return view('dashboard.menu.index', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $school = School::get();
        echo view('dashboard.menu.create', compact('school', 'grupo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $menu = Menu::create([
            'dia' => $request->dia,
            'guisado' => $request->guisado,
            'sopa_guarnicion' => $request->sopa_guarnicion,
            'agua' => $request->agua,
            'postre' => $request->postre,
            'id_escuela' => $request->id_escuela,
        ]);
        
        return to_route("menu.index");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        return view("dashboard.menu.show", compact('menu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        $school = School::get();
        echo view('dashboard.menu.edit', compact('school', 'menu'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(PutRequest $request, Menu $menu)
    {
        $menu->update($request->validated());
        return to_route("menu.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        $menu->delete();
        return to_route("menu.index");
    }
}
