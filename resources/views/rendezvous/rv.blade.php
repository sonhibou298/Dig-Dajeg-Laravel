@extends('layouts.menuPatient', ['title'=>'Chiffa_Rendez-vous'])
@section('content')
<section class="formRv">
    <div class="card">
        <div class="card-header text-align-center">
            Remplissez ce formulaire pour prendre un rendez-vous
        </div>
        <div class="card-body">
            <form method="post" action="{{route('addRendezVous')}}">
                @csrf
                <div class="form-group mt-2">
                    <label for="exampleInputEmail1">Date Rendez-vous</label>
                    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="dateRv" value="{{old('dateRv')}}">
{{--                    @if($errors->any())--}}
{{--                        @foreach($errors->get('dateRendezVous') as $error)--}}
{{--                            <div class="input-required">--}}
{{--                                {{$error}}--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
{{--                    @endif--}}
                </div>
                <div class="form-group mt-2">
                    <label for="exampleInputPassword1">Heure de rendez-vous</label>
                    <input type="time" class="form-control" id="exampleInputPassword1" placeholder="Heure" name="heure">
{{--                    @if($errors->any())--}}
{{--                        @foreach($errors->get('heureRendezVous') as $error)--}}
{{--                            <div class="input-required">--}}
{{--                                {{$error}}--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
{{--                    @endif--}}
                </div>
                <div class="form-group mt-2">
                    <label for="exampleInputPassword1">Motif</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Motif consultation" name="motif">
{{--                    @if($errors->any())--}}
{{--                        @foreach($errors->get('motifConsultation') as $error)--}}
{{--                            <div class="input-required">--}}
{{--                                {{$error}}--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
{{--                    @endif--}}
                </div>
                <div class="form-group mt-2">
                    <label for="exampleInputPassword1">Paye</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="paye" name="paye" value="0" disabled>
                </div>
                <div class="form-group mt-2">
                    <label for="exampleInputPassword1">Tarif</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Tarif" name="tarif" value={{$medecin->Service->Tarif->coutConsultation}} disabled />
                </div>
                <div class="form-group mt-2">
                    <label for="exampleInputPassword1">Medecin</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Medecin" name="medecin_id" value={{$medecin->id}}>
                </div>
                <button type="submit" class="btn-submit mt-3">Enregistrer</button>
            </form>

        </div>
    </div>
</section>
@endsection
