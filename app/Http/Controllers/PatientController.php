<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Http\Requests\StorePatientRequest;
use App\Http\Requests\UpdatePatientRequest;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = DB::select("SELECT nom, prenom, genre, dateNaissance, status FROM users WHERE role_id = 3");
        return response()->json($result);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePatientRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePatientRequest $request)
    {
        $getId = User::where('role_id', '=', '3')->latest()->first()->id;
//        $getId = DB::select("SELECT id from users WHERE role_id = '3' ORDER BY id DESC LiMIT 1");
        $patient = Patient::create([
            'user_id' => $getId,
        ]);
        return response()->json([
            'Success' => 'Success'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {

    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePatientRequest  $request
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePatientRequest $request, Patient $patient, $id)
    {
        $patient = Patient::find($id);
        $patient->update($request->all());
        return response()->json([
            'message' => 'Patient Modifié'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient, $id)
    {
        $patient = Patient::find($id);
        $patient->delete();
        return response()->json([
            'message' => 'Patient supprimé'
        ]);

    }
    public function getIdLastUser()
    {
        $getId = User::where('role_id', '=', '3')->latest()->first()->id;
        return response()->json($getId);
    }
    public function mesRendezvous(){

        return view('patient.mesrendezvous');
    }

    public function medecinFavoris(){

        return view('patient.mesMedecinFavoris');
    }

    public function monCompte(){

        return view('patient.monCompte');
    }
}
