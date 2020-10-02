@extends('layouts.base')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h4 class="font-weight-bold mb-0">LISTE  DE MES IMPOTS</h4>
                        </div>
                        <div>
                            <a href="{{ route('impot.create') }}" class="btn btn-primary btn-icon-text btn-rounded">
                                <i class="ti-plus  btn-icon-prepend"></i>Payer son impot
                            </a>
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
