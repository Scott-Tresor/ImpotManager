@extends('layouts.base')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    @can('add-user')
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="font-weight-bold mb-0">LISTE DES CONTRIBUABLES</h4>
                        </div>
                        <div>
                            <a href="{{ route('users.create') }}" class="btn btn-primary btn-icon-text btn-rounded">
                                <i class="ti-plus  btn-icon-prepend"></i>Ajouter un nouveau contribuable
                            </a>
                        </div>
                    </div>
                    @endcan
                </div>
            </div>
            @can('add-user')
                @include('app.rapport.table')
            @elsecan('add')
            @endcan
        </div>
        @include('includes.footer')
    </div>
@endsection
