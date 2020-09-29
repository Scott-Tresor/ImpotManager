@extends('includes.auth')

@section('auth')
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth lock-full-bg">
            <div class="row w-100">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-transparent text-left p-5 text-center">
                        <form class="pt-5" method="POST" action="{{ route('verification.resend') }}">
                            <div class="form-group">
                                <label for="examplePassword1">Mot de passe oublier</label>
                                <input type="password" class="form-control text-center" id="examplePassword1" placeholder="Password">
                            </div>
                            <div class="mt-5">
                                <button type="submit" class="btn btn-block btn-success btn-lg font-weight-medium">{{ __('click here to request another') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
