<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Mensaje\StoreRequest;
use App\Http\Requests\Mensaje\PutRequest;
use App\Models\Mensaje;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MensajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $escuela = Auth::user()->id;
        $mensajes = Mensaje::where('id_emisor', $escuela)->paginate(7);
        return view('dashboard.mensaje.index', compact('mensajes'));
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
        echo view('dashboard.mensaje.create', compact('users'));
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
        Mensaje::create($request->all());
        return to_route("mensaje.index");

    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mensaje  $mensaje
     * @return \Illuminate\Http\Response
     */
    public function show(Mensaje $mensaje)
    {
        return view("dashboard.mensaje.show", compact('mensaje'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mensaje  $mensaje
     * @return \Illuminate\Http\Response
     */
    public function edit(Mensaje $mensaje)
    {
        $escuela = Auth::user()->id_escuela;
        $users = User::where('id_escuela', $escuela)->get()->where('rol', 'tutor');

        echo view('dashboard.mensaje.edit', compact('users', 'mensaje'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mensaje  $mensaje
     * @return \Illuminate\Http\Response
     */
    public function update(PutRequest $request, Mensaje $mensaje)
    {
        $mensaje->update($request->validated());
        return to_route("mensaje.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mensaje  $mensaje
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mensaje $mensaje)
    {
        $mensaje->delete();
        return to_route("mensaje.index");
    }
}
