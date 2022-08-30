@extends('layouts.menuAdmin', ['title'=>'Ajout Medecin'])
@section('content')
    <section class="formRv">
        <div class="card">
            <div class="card-header text-align-center">
                Formulaire d'ajout Medecin
            </div>

            <div class="card-body">
                <form method="post" action="{{route('addMedecin')}}" enctype="multipart/form-data">
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
                        <div class=" col-6 mt-4">
                            <label for="exampleInputEmail1">Genre</label>
                            <select class="form-select" aria-label="Default select example" name="genre">
                                <option value="Homme">Homme</option>
                                <option value="Femme">Femme</option>
                            </select>
                        </div>
                        <div class=" col-6 form-group mt-4">
                            <label for="exampleInputEmail1">Telephone</label>
                            <input type="text" class="form-control" id="exampleInputDate" aria-describedby="emailHelp" name="telephone" value="{{old('telephone')}}" placeholder="77 123 45 67">
                            @if($errors->any())
                                @foreach($errors->get('telephone') as $error)
                                    <div class="input-required">
                                        {{$error}}
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>

                    <div class="row row-space">
                        <div class=" col-6 mt-4">
                            <label for="exampleInputEmail1">Adresse</label>
                            <input type="text" class="form-control" id="exampleInputDate" aria-describedby="emailHelp" name="adresse" value="{{old('adresse')}}" placeholder="Adresse">
                            @if($errors->any())
                                @foreach($errors->get('adresse') as $error)
                                    <div class="input-required">
                                        {{$error}}
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <div class=" col-6 form-group mt-4">
                            <label for="exampleInputEmail1">Date Naissance</label>
                            <input type="date" class="form-control" id="exampleInputDate" aria-describedby="emailHelp" name="dateNaissance" value="{{old('dateNaissance')}}">
                            @if($errors->any())
                                @foreach($errors->get('dateNaissance') as $error)
                                    <div class="input-required">
                                        {{$error}}
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>

                    <div class="row row-space">
                        <div class=" col-6 mt-4">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" id="exampleInputDate" aria-describedby="emailHelp" name="email" value="{{old('email')}}" placeholder="Email">
                            @if($errors->any())
                                @foreach($errors->get('email') as $error)
                                    <div class="input-required">
                                        {{$error}}
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <div class=" col-6 form-group mt-4">
                            <label for="exampleInputEmail1">Mot de passe</label>
                            <input type="password" class="form-control" id="exampleInputDate" aria-describedby="emailHelp" name="password" value="{{old('password')}}" placeholder="Entrez le mot de passe">
                            @if($errors->any())
                                @foreach($errors->get('password') as $error)
                                    <div class="input-required">
                                        {{$error}}
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="row row-space">
                        <div class=" col-6 mt-4">
                            <label for="exampleInputEmail1">Profil</label>
                            <input type="file" class="form-control" id="exampleInputDate" aria-describedby="emailHelp" name="profil" value="{{old('profil')}}">
                            @if($errors->any())
                                @foreach($errors->get('profil') as $error)
                                    <div class="input-required">
                                        {{$error}}
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <div class=" col-6 mt-4">
                            <label for="exampleInputEmail1">Disponibilte</label>
                            <input type="number" class="form-control" id="exampleInputDate" aria-describedby="emailHelp" name="disponible" value="1" >
                        </div>
                    </div>

                    <div class="row row-space">
                        <div class=" col-6 mt-4">
                            <label for="exampleInputEmail1">Jour de service</label>

                            <select class="form-select" aria-label="Default select example" name="jourService">
                                @foreach($jourService as $jourService)
                                <option value="{{$jourService->id}}">{{$jourService->jourDisponible}}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class=" col-6 form-group mt-4">
                            <label for="exampleInputEmail1">Service</label>
                            <select class="form-select" aria-label="Default select example" name="service">
                                @foreach($service as $service)
                                <option value="{{$service->id}}">{{$service->nomService}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row row-space">
                        <div class=" col-6 mt-4">
                            <input type="number" value="2" name="role_id" hidden>

                        </div>

                    </div>
                    <button type="submit" class="btn-submit mt-3">Enregistrer</button>
                </form>

        </div>
    </section>
@endsection
