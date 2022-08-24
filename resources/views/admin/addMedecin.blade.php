@extends('layouts.menuAdmin', ['title'=>'Ajout Medecin'])
@section('content')
    <section class="formRv">
        <div class="card">
            <div class="card-header text-align-center">
                Formulaire d'ajout Medecin
            </div>

            <div class="card-body">
                <form method="POST" action="{{route('addRendezVous')}}">
                    @csrf
                    <div class="row row-space">
                        <div class=" col-6 form-group mt-2">
                            <label for="exampleInputEmail1">Nom</label>
                            <input type="text" class="form-control" id="exampleInputDate" aria-describedby="emailHelp" name="nom" value="{{old('nom')}}" placeholder="Nom">
                            @if($errors->any())
                                @foreach($errors->get('nom') as $error)
                                    <div class="input-required">
                                        {{$error}}
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <div class=" col-6 form-group mt-2">
                            <label for="exampleInputEmail1">Prenom</label>
                            <input type="text" class="form-control" id="exampleInputDate" aria-describedby="emailHelp" name="prenom" value="{{old('nom')}}" placeholder="Prenom">
                            @if($errors->any())
                                @foreach($errors->get('nom') as $error)
                                    <div class="input-required">
                                        {{$error}}
                                    </div>
                                @endforeach
                            @endif
                        </div>

                    </div>
                    <div class="row row-space">
                        <div class=" col-6 form-group mt-4">
                            <label for="exampleInputEmail1">Nom</label>
                            <input type="text" class="form-control" id="exampleInputDate" aria-describedby="emailHelp" name="nom" value="{{old('nom')}}" placeholder="Nom">
                            @if($errors->any())
                                @foreach($errors->get('nom') as $error)
                                    <div class="input-required">
                                        {{$error}}
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <div class=" col-6 form-group mt-4">
                            <label for="exampleInputEmail1">Prenom</label>
                            <input type="text" class="form-control" id="exampleInputDate" aria-describedby="emailHelp" name="prenom" value="{{old('nom')}}" placeholder="Prenom">
                            @if($errors->any())
                                @foreach($errors->get('nom') as $error)
                                    <div class="input-required">
                                        {{$error}}
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <button type="submit" class="btn-submit mt-3">Enregistrer</button>
                </form>
                <br>
                @if(session()->has('error'))
                    <div class="alert alert-danger">
                        {{ session()->get('error') }}
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection
