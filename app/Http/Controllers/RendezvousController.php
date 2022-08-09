<?php

namespace App\Http\Controllers;

use App\Models\Medecin;
use App\Models\Rendezvous;
use App\Http\Requests\StoreRendezvousRequest;
use App\Http\Requests\UpdateRendezvousRequest;
use App\Models\Service;
use App\Models\Tarif;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class RendezvousController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medecin = Medecin::all();
        $service = Service::all();
        $tarif = Tarif::all();
        return view('rendezvous.rv', compact('medecin', 'service', 'tarif'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRendezvousRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRendezvousRequest $request)
    {
        $fields = $request->validate([
//            'dateReservation' => ['required', 'date'],
            'dateRendezVous' => ['required', 'date'],
            'heureRendezVous' => ['require', 'time'],
            'motifConsultation' => ['required', 'string'],
            'tarif_id' => ['required', 'int'],
            'medecin_id' => ['required', 'date'],

        ]);
        $rv = Rendezvous::create([
            'dateReservation' => Carbon::now(),
            'dateRendezVous' => $fields['dateRv'],
            'heureRendezVous' => $fields['heure'],
            'motifConsultation' => $fields['motif'],
            'etat' => 'En attente',
            'paye' => $request->input('paye'),
            'tarif_id' => $fields['tarif'],
            'medecin_id' => $fields['medecin_id'],
            'proche_id' => $request->input('proche_id'),
            'patient_id' => Auth::id(),
        ]);
        dd($rv);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rendezvous  $rendezvous
     * @return \Illuminate\Http\Response
     */
    public function show(Rendezvous $rendezvous, $id)
    {
        $rv = Rendezvous::find($id);
        return $rv;
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRendezvousRequest  $request
     * @param  \App\Models\Rendezvous  $rendezvous
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRendezvousRequest $request, Rendezvous $rendezvous, $id)
    {
        $rv = Rendezvous::find($id);
        $rv->update($request->all());
        return response()->json([
            'message' => 'Rendez-vous modifié'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rendezvous  $rendezvous
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rendezvous $rendezvous, $id)
    {
        $rv = Rendezvous::find($id);
        $rv->delete();
        return response()->json([
            'message' => 'Rendez-vous modifié'
        ]);
    }

    public function getMedecinId(Medecin $medecin, $id)
    {
        $medecin = Medecin::find($id);
        return view('rendezvous.rv', compact('medecin'));
    }

}
