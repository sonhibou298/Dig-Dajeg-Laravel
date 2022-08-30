<?php

namespace App\Http\Controllers;

use App\Models\JourDeService;
use App\Models\Medecin;
use App\Http\Requests\StoreMedecinRequest;
use App\Http\Requests\UpdateMedecinRequest;
use App\Models\Patient;
use App\Models\Rendezvous;
use App\Models\Service;
use App\Models\User;
use http\Env\Request;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
        $user = User::all();
        $service = Service::all();
        $jourService = JourDeService::all();
        return view('medecin.listMedecin', compact('medecins', 'user', 'service', ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jourService = JourDeService::all();
        $service = Service::all();
        return view('admin.addMedecin', compact('jourService', 'service'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMedecinRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMedecinRequest $request)
    {
        $data = $request->all();
        $user = User::create([
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'genre' => $request->input('genre'),
            'telephone' => $request->input('telephone'),
            'adresse' => $request->input('adresse'),
            'dateNaissance' => $request->input('dateNaissance'),
            'email' => $request->input('email'),
            'password' =>Hash::make($request->input('password')),
            'profil' => $request->input('profil'),
            'role_id' => $request->input('role_id'),
        ]);
        $getId = User::where('role_id', '=', '2')->latest()->first()->id;
        $medecin = Medecin::create([
            'user_id' => $getId,
            'disponible' => $request->input('disponible'),
            'jour_de_service_id' => $request->input('jourService'),
            'service_id' => $request->input('service')
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
        $medecinConnect = Auth::user()->Medecin->id;
//      $rendezvous = Rendezvous::all()->where('medecin_id', '===', $medecinConnect);

        $rendezvous = Rendezvous::where('medecin_id', $medecinConnect)->paginate(5);
        $rv = Rendezvous::where('medecin_id', $medecinConnect)->count();
        $rva = Rendezvous::where('etat', 'Approuvé')->where('medecin_id', $medecinConnect)->count();
        $rve = Rendezvous::where('etat', 'En attente')->where('medecin_id', $medecinConnect)->count();
        $rvr = Rendezvous::where('etat', 'Reporté')->where('medecin_id', $medecinConnect)->count();
        $users = User::count();
        $patient =Patient::all();

        return view('medecin.homeMedecin', compact('rendezvous', 'patient','rv','rva', 'rve', 'rvr', 'users'));
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
