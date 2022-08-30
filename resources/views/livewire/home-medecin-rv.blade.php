<div>
    <div class="filtre-table row me-12">
        <div class="col-auto">
            <label for="query" class="sr-only">Rechercher</label>
            <input type="search" class="form-control" id="query" placeholder="Recherche par prenom"/>
        </div>
        <div class="col-auto ml-12 mb-4">
            <select id="resultat" wire:model.lazy="perPage" class="form-select w-auto">
                @for($i = 5; $i <= 25; $i += 5)
                    <option value="{{$i}}">{{$i}}</option>
                @endfor
            </select>
            {{-- <label for="resultat">Résultat</label> --}}
        </div>
    </div>
    <table class="table table-bordered">
        <thead>
        <tr class="text">

            <th scope="col">Prenom & Nom</th>
            <th scope="col">Date réservation</th>
            <th scope="col">Date Rv</th>
            <th scope="col">Heure Rv</th>
            <th scope="col">Motif</th>
            <th scope="col">Etat</th>
{{--            <th scope="col">Proche</th>--}}
            {{--<th scope="col">Payé</th>--}}
            <th scope="col">Action</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($rendezvous as $rv)
            <tr>
                <td>{{$rv->Patient->User->prenom.' '.$rv->Patient->User->nom}}</td>
                <td>{{$rv->dateReservation}}</td>
                <td>{{$rv->dateRendezVous}}</td>
                <td>{{$rv->heureRendezVous}}</td>
                <td>{{$rv->motifConsultation}}</td>
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
{{--                <td>{{$rv->proche_id}}</td>--}}
                <form method="post" action={{route('approuverRendezVous', $rv->id)}}>
                    @csrf
                    @method('PUT')
                    <td style="width: 30px">
                        <button type="submit" class="btn btn-outline-success">Approuver</button>
                    </td>
                </form>
                <form method="post" action={{route('rejeterRendezVous', $rv->id)}}>
                    @csrf
                    @method('PUT')
                    <td style="width: 30px"><button type="submit" class="btn btn-outline-danger">Rejeter</button></td>
                </form>
            </tr>
        @endforeach
        </tbody>

    </table>

    <div class="">
        {{ $rendezvous->links() }}
    </div>
</div>
