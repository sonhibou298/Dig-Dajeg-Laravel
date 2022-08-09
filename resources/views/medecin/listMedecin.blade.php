@extends('layouts.menuPatient', ['title'=>'Chifaa_Recherche Medecin'])
@section('content')
<section class="card-medecin">
    <div class="container">
        <div class="row mb-3 mt-5">
            @foreach($medecins as $medecin)
            <div class="col-md-12 col-lg-12 col-sm-12 mt-2">
                <div class="d-flex flex-row border rounded">
                    <div class="p-0 w-25">

                    </div>
                    <div class="pl-3 pt-2 pr-2 pb-2 w-75 border-left">
                        <h4 class="text">Dr. {{$medecin->User->prenom}}  {{$medecin->User->nom}}</h4>
                        <h5 class="text-service">{{$medecin->Service->nomService}}</h5>
                        <h6>{{$medecin->JourDeService->jourDisponible}}</h6>
                        <h6>{{$medecin->JourDeService->heureDebut}}</h6>
                        <h6>{{$medecin->JourDeService->heureDecente}}</h6>
                        <a href={{route('getMedecinId', $medecin->id)}}><button class="btn-rv">Prendre un rendez-vous</button></a>
{{--                        <p class="text-right m-0"><a href="#" class="btn btn-success"> View Profile</a></p>--}}
                    </div>
                </div>
            </div>
            @endforeach
    </div>
</section>
@endsection
