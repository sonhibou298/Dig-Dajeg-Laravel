@extends('layouts.menuPatient', ['title'=>'Chifaa_Mes rendez-vous'])
@section('content')
    <section class="table-rv">
        <table class="table table-bordered">
            <thead>
            <tr class="text">

                <th scope="col">Medecin</th>
                <th scope="col">Date réservation</th>
                <th scope="col">Date Rv</th>
                <th scope="col">Heure</th>
                <th scope="col">Motif</th>
                <th scope="col">Cout</th>
                <th scope="col">Statut</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($rendezvous as $rv)
                <tr>
                    <td>Dr. {{$rv->Medecin->User->prenom.' '.$rv->Medecin->User->nom}}</td>
                    <td>{{$rv->dateReservation}}</td>
                    <td>{{$rv->dateRendezVous}}</td>
                    <td>{{$rv->heureRendezVous}}</td>
                    <td>{{$rv->motifConsultation}}</td>
                    <td>{{$rv->tarif}}</td>
                    <td style="width: 100px">
                        @if($rv->etat == 'Approuvé')
                            <div style="background-color: #CDF0EA; border-radius: 6px; font-size: 14px; text-align: center; font-weight: bold">
                                <span style="color: #16a085">{{$rv->etat}}</span>
                            </div>
                        @elseif($rv->etat == 'Reporté')
                            <div style="background-color: #f6dbe0; border-radius: 6px; font-size: 14px; text-align: center; font-weight: bold">
                                <span style="color: #e63c3c">{{$rv->etat}}</span>
                            </div>
                        @elseif($rv->etat == 'En attente')
                            <div style="background-color: #f8ebd9; border-radius: 6px; font-size: 14px; text-align: center; font-weight: bold">
                                <span style="color: #F49C12">{{$rv->etat}}</span>
                            </div>
                        @endif

                    </td>
                    <td style="width: 30px">
                        <a href="{{route('infoRendezVous', $rv->id)}}"><button type="submit" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Voir</button></a>
                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <h6 style="font-weight: bold">Docteur</h6>
                                        <p>Dr. {{$rv->Medecin->User->prenom.' '.$rv->Medecin->User->nom}}</p>
                                        <hr>
                                        <h6 style="font-weight: bold">Date Rendez-vous</h6>
                                        <p>{{$rv->dateRendezVous}}</p>
                                        <hr>
                                        <h6 style="font-weight: bold">Heure Rendez-vous</h6>
                                        <p>{{$rv->heureRendezVous}}</p>
                                        <hr>
                                        <h6 style="font-weight: bold">Motif Consultation</h6>
                                        <p>{{$rv->motifConsultation}}</p>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn-submit mt-3">Modifier</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>


                </tr>
            @endforeach
            </tbody>

        </table>
        {{--    {{ $rendezvous->links() }}--}}
    </section>
@endsection
@include('sweetalert::alert')
