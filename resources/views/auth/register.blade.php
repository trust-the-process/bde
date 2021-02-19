@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                @guest
                <script>
                    function name() {
                        swal({
                            title: "CHARTE!",
                            text: "Charte du bde Bureau Des Elèves (BDE) : Association ayant pour objectif d’animer la vie associative des étudiants de IUI : en organisant des soirées étudiantes dans les locaux du campus Rébeval et dans des clubs privatisés; en programmant trois semaines d’intégration qui s’achèvent par le Week-End d’Intégration (WEI); en organisant des événements hebdomadaires ou mensuels tels que les apéro-bières, la découverte de bars insolites et la vente de pains au chocolat; en organisant des événements ponctuels (Loto, Buffet des régions…); en assurant la cohésion des associations. Les adhérents et les membres des associations de UCAC-ICAM: Art.1.1 : Ne sont considérés comme adhérents aux associations de UCAC-ICAM que les élèves ayant payé leur cotisation au BDE . Art. 1.2: Seuls sont éligibles au conseil d’administration des différentes associations les cotisants au BDE EIVP. Les cotisations : Art. 2.1 : La cotisation est valable pour le cursus d’études à l’EIVP et ne peut donc faire l’objet d’un paiement annuel pour un étudiant en cursus classique. Son montant, de 240 euros, peut-être encaissé sur six mois en trois fois. !",
                            icon: "success",
                            buttons: {
                                confirm: {
                                    text: "Confirm Me",
                                    value: true,
                                    visible: true,
                                    className: "btn btn-success",
                                    closeModal: true
                                }
                            }
                        });
                    }
                </script>
                @else
                
                @endguest

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="LOCALISATION" class="col-md-4 col-form-label text-md-right">{{ __('LOCALISATION') }}</label>

                            <div class="col-md-6">
                                <input id="LOCALISATION" type="password" class="form-control @error('LOCALISATION') is-invalid @enderror" name="LOCALISATION" required autocomplete="new-LOCALISATION">

                                @error('LOCALISATION')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
