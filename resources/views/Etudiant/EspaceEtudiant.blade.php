@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Vos Absence </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <table class="table">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th>Nom</th>
                                <th>Séance</th>
                                <th>type</th>
                                <th>Présence</th>
                                <th>Justification</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($etudiant->absenceEtudiant as $abs)
                            <tr>
                                <td scope="row">{{$etudiant->nom_etu}} {{$etudiant->prenom_etu}}</td>
                                <td>{{$abs->seanceabs->date}} {{$abs->seanceabs->heure_debut}}->{{$abs->seanceabs->heure_fin}}</td>
                                <td>{{$abs->seanceabs->type}}</td>
                                <td>
                                     @if ($abs->etat==0)
                                         Present(e)
                                     @else
                                         Absent(e)
                                     @endif</td>
                                     <td>{{$abs->justification}}</td>
                            </tr>

                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
