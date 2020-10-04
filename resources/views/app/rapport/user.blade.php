@extends('layouts.base')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Contribuable {{ $user->name }}</h4>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <ul class="list-group">
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Nom
                                                <span class="badge badge-primary badge-pill">{{ $user->name }}</span>
                                            </li>
                                        </ul>
                                        <ul class="list-group">
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Postnom
                                                <span class="badge badge-primary badge-pill">{{ $user->secondname }}</span>
                                            </li>
                                        </ul>
                                        <ul class="list-group">
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Prenom
                                                <span class="badge badge-primary badge-pill">{{ $user->firstname }}</span>
                                            </li>
                                        </ul>
                                        <ul class="list-group">
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Email
                                                <span class="badge badge-primary badge-pill">{{ $user->email }}</span>
                                            </li>
                                        </ul>
                                        <ul class="list-group">
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Numero de Telephones
                                                <span class="badge badge-primary badge-pill">{{ $user->phones }}</span>
                                            </li>
                                        </ul>

                                        <ul class="list-group">
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Numero d'identification nationale
                                                <span class="badge badge-primary badge-pill">{{ $user->national_identification }}</span>
                                            </li>
                                        </ul>
                                        <ul class="list-group">
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Province
                                                <span class="badge badge-primary badge-pill">{{ $user->province }}</span>
                                            </li>
                                        </ul>
                                        <ul class="list-group">
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Communes
                                                <span class="badge badge-primary badge-pill">{{ $user->commune }}</span>
                                            </li>
                                        </ul>
                                        <ul class="list-group">
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Ville
                                                <span class="badge badge-primary badge-pill">{{ $user->ville }}</span>
                                            </li>
                                        </ul>

                                        <ul class="list-group">
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                Quartier
                                                <span class="badge badge-primary badge-pill">{{ $user->quartier }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
