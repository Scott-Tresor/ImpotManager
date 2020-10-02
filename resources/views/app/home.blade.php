@extends('layouts.base')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="font-weight-bold mb-0">Rapport de declaration d'impot</h4>
                        </div>
                        <div>
                            <button type="button" class="btn btn-primary btn-icon-text btn-rounded">
                                <i class="ti-clipboard btn-icon-prepend"></i>Rapport
                            </button>
                        </div>
                    </div>
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
