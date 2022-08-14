<?php

namespace App\Http\Controllers;

use App\Models\Medecin;
use App\Http\Requests\StoreMedecinRequest;
use App\Http\Requests\UpdateMedecinRequest;
use App\Models\Patient;
use App\Models\Rendezvous;
use App\Models\User;
use http\Env\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MedecinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medecins = Medecin::all();
        return view('medecin.listMedecin', compact('medecins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMedecinRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMedecinRequest $request)
    {
        $fiels = $request->validate([
            'disponible' => 'required|boolean',
            'user_id' => 'required|int',
            'jour_de_service_id' => 'required|int'
        ]);

        $medecin = Medecin::create([

        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Medecin  $medecin
     * @return \Illuminate\Http\Response
     */
    public function show(Medecin $medecin, $id)
    {
        $medecin = Medecin::find($id);
        return view('rendezvous.rv', compact('medecin'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMedecinRequest  $request
     * @param  \App\Models\Medecin  $medecin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMedecinRequest $request, Medecin $medecin, $id)
    {
        $medecin = Medecin::find($id);
        $medecin->update($request->all());
        return response()->json([
            'Message'=>'Medecein modifié'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Medecin  $medecin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medecin $medecin, $id)
    {
        $medecin = Medecin::find($id);
        $medecin->delete();
        return response()->json([
            'Message'=>'Medecein supprimé'
        ]);
    }
    public function infoMedecin(){
        $medecin = Medecin::all();
        return view('medecin.listMedecin', compact('medecin'));
    }

    public function statistique(){
        $rendezvous = Rendezvous::all();
        $rv = Rendezvous::count();
        $rva = Rendezvous::where('etat', 'Approuvé')->count();
        $rve = Rendezvous::where('etat', 'En attente')->count();
        $rvr = Rendezvous::where('etat', 'Reporté')->count();
        $users = User::count();
        return view('medecin.homeMedecin', compact('rendezvous', 'rv','rva', 'rve', 'rvr', 'users'));
    }

    public function search()
    {

//        $request= Medecin::where('service_id', 'like' , '%'.$service_id.'%')->get();
//
//        return response()->json($request);
        $medecin = Medecin::query();
        if (request('term'))
        {
            $medecin->where('service_id', 'LIKE', '%'.request('term'). '%');
        }

        return response()->json($medecin);

    }
}
