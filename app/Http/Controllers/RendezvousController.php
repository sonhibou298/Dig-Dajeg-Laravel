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
use Symfony\Component\Console\Input\Input;
use RealRashid\SweetAlert\Facades\Alert;

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
        $rv = Rendezvous::create([
            'dateReservation' => Carbon::now(),
            'dateRendezVous' => $request->input('dateRv'),
            'heureRendezVous' => $request->input('heure'),
            'motifConsultation' => $request->input('motif'),
            'etat' => 'En attente',
            'paye' => $request->input('paye'),
            'tarif' => $request->input('tarif'),
            'medecin_id' => $request->input('medecin_id'),
            'proche_id' => $request->input('proche_id'),
            'patient_id' => Auth::user()->Patient->id,
        ]);

        return redirect('mesRendezvous')->with('toast_success', 'Votre rendez-vous est crée');
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
    public function approuver(UpdateRendezvousRequest $request, Rendezvous $rendezvous, $id)
    {
        $rendezvous = Rendezvous::find($id);
        $rendezvous->update([
            'etat' => 'Approuvé'
        ]);
        return redirect()->route('homeMedecin', compact('rendezvous'))->with('toast_success', 'Rendez-vous approuvvé');

    }
    public function rejeter(UpdateRendezvousRequest $request, Rendezvous $rendezvous, $id)
    {
        $rendezvous = Rendezvous::find($id);
        $rendezvous->update([
            'etat' => 'Reporté'
        ]);
        return redirect()->route('homeMedecin', compact('rendezvous'))->with('toast_error', 'Rendez-vous rejeté');

    }
}
