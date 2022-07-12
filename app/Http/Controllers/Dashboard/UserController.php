<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreRequest;
use App\Http\Requests\User\PutRequest;
use App\Models\User;
use App\Models\Grupo;
use App\Models\School;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $escuela = Auth::user()->id_escuela;
        $users = User::where('id_escuela', $escuela)->where('rol', 'tutor')->paginate(7);
        return view('dashboard.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        
        $escuela = Auth::user()->id_escuela;
        $grupo = Grupo::where('id_escuela', $escuela)->get();
        $school = School::get();
        echo view('dashboard.user.create', compact('school', 'grupo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'apellidos' => $request->apellidos,
            'numero' => $request->numero,
            'numero_2' => $request->numero_2,
            'saldo' => $request->saldo,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'id_escuela' => $request->id_escuela,
            'id_grupo' => $request->id_grupo,
        ]);
        
        return to_route("user.index");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view("dashboard.user.show", compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $escuela = Auth::user()->id_escuela;
        $grupo = Grupo::where('id_escuela', $escuela)->get();
        $school = School::get();
        echo view('dashboard.user.edit', compact('school', 'grupo', 'user'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(PutRequest $request, User $user)
    {
        $user->update($request->validated());
        
        return to_route("user.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return to_route("user.index");
    }
}
