@extends('users.layouts.master')

@section('title') @lang('translation.KYC_Application') @endsection

@section('css')
    <!-- Plugins css -->
    <link href="{{ URL::asset('/assets/libs/dropzone/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    @component('users.components.breadcrumb')
        @slot('li_1') Crypto @endslot
        @slot('title') Verification @endslot
    @endcomponent

    <div class="row justify-content-center mt-lg-5">
        <div class="col-xl-5 col-sm-8">
            <div class="card">
                @if ($user->statut_de_compte == "en cours")
                    <div class="card-body">
                        <div class="text-center">
                            <div class="row justify-content-center">
                                <div class="col-lg-10">
                                    <h4 class="mt-4 font-weight-semibold">Verification</h4>
                                    <p class="text-muted mt-3">
                                        Votre compte est en cours de vérificaion. Veuillez patienter ! ! !
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @elseif($user->statut_de_compte == "rejecter")
                    <div class="card-body">
                        <div class="text-center">
                            <div class="row justify-content-center">
                                <div class="col-lg-10">
                                    <h4 class="mt-4 font-weight-semibold">Verification</h4>
                                    <p class="text-muted mt-3">
                                        Votre compte a été rejecté pour cet motif.
                                    </p>
                                    <div class="card">
                                         <div class="card-body" style="background-color: #9042e9; border-radius: 5px 5px 5px 5px;">
                                             <span style=" padding: 3px; border-radius: 5px 5px 5px 5px; text-align: center; color: #fff; font-size: 15px; letter-spacing: 1px;">
                                                 {{ $user->motif }}
                                             </span>
                                         </div>
                                    </div>

                                    <p class="text-muted mt-3">
                                        Enclanché un nouveau processus en cliquant sur le bouton Vérifier.
                                    </p>
                                    <div class="mt-2">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#verificationModal">
                                            {{-- Click here for Verification --}} Vérifier
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="verificationModal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">{{-- Verify your Account --}} Vérifier votre compte</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">

                                    <div id="kyc-verify-wizard">
                                        <!-- Personal Info -->
                                        <h3>{{-- Personal Info --}} Informations Personnelles</h3>
                                        <section>
                                            <form class="form-horizontal" action="{{ route('verification.users.store') }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="kycfirstname-input" class="form-label">{{-- First name --}} Nom</label>
                                                            <input type="text" class="form-control" name="first_name" id="kycfirstname-input"
                                                                value="{{ $user->first_name }}">
                                                        </div>
                                                        @error('first_name')
                                                            <span class="text-red-800">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="kyclastname-input" class="form-label">{{-- Last name --}} Prénom</label>
                                                            <input type="text" class="form-control" name="last_name" id="kyclastname-input"
                                                            value="{{ $user->last_name }}">
                                                        </div>
                                                        @error('last_name')
                                                            <span class="text-red-800">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="kycphoneno-input" class="form-label">Adresse</label>
                                                            <input type="text" class="form-control" name="adresse" id="kycphoneno-input"
                                                                placeholder="Entrer votre adresse">
                                                        </div>
                                                        @error('adresse')
                                                            <span class="text-red-800">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="kycbirthdate-input" class="form-label"> Email</label>
                                                            <input type="text" class="form-control" name="email" id="kycbirthdate-input"
                                                            value="{{ $user->email }}">
                                                        </div>
                                                        @error('email')
                                                            <span class="text-red-800">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="kycfirstname-input" class="form-label">{{-- First name --}} Numéro de téléphone 1</label>
                                                            <input type="number" class="form-control" name="phone_1" id="kycfirstname-input"
                                                                placeholder="Entrer votre numéro 1">
                                                        </div>
                                                        @error('phone_1')
                                                            <span class="text-red-800">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="kycfirstname-input" class="form-label">{{-- First name --}} Numéro de téléphone 2</label>
                                                            <input type="number" class="form-control" name="phone_2" id="kycfirstname-input"
                                                                placeholder="Entrer votre numéro 2">
                                                        </div>
                                                        @error('phone_2')
                                                            <span class="text-red-800">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                                
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="kycselectcity-input" class="form-label">Sexe</label>
                                                            <select class="form-select" name="sexe" id="kycselectcity-input">
                                                                <option value="Masculin" selected>Masculin</option>
                                                                <option value="Feminin">Feminin</option>
                                                            </select>
                                                        </div>
                                                        @error('sexe')
                                                            <span class="text-red-800">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="kycfirstname-input" class="form-label">{{-- First name --}} Numéro IFU</label>
                                                            <input type="number" class="form-control" name="numero_ifu" id="kycfirstname-input"
                                                                placeholder="Entrer votre numero ifu">
                                                        </div>
                                                        @error('numero_ifu')
                                                            <span class="text-red-800">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>

                                        <!-- Confirm email -->
                                        <h3>Photo de vos pièces</h3>

                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="formFile" class="form-label">Photo d'idantité</label>
                                                            <input class="form-control" type="file" name="image_photo" id="formFile">
                                                        </div>
                                                        @error('image_photo')
                                                            <span class="text-red-800">{{$message}}</span>
                                                        @enderror
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="col-md-12">Photo de la carte d'identité (CIP, LEPI ..)</label>
                                                            <input class="form-control" type="file" name="image_carte_id" id="formFile">
                                                        </div>
                                                        @error('image_carte_id')
                                                            <span class="text-red-800">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="col-md-12">Photo de l'originale de l'IFU</label>
                                                            <input class="form-control" type="file" name="image_ifu" id="formFile">
                                                        </div>
                                                        @error('image_ifu')
                                                            <span class="text-red-800">{{$message}}</span>
                                                        @enderror
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="col-md-12">Photo de la facture (SBEE ou SONEB)</label>
                                                            <input class="form-control" type="file" name="image_facture" id="formFile">
                                                        </div>
                                                        @error('image_facture')
                                                            <span class="text-red-800">{{$message}}</span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row mt-5">
                                                    <div class="col-lg-10">
                                                        
                                                    </div>

                                                    <div class="col-lg-2 px-5">
                                                        <button type="submit" class="btn btn-info">Valider</button>
                                                    </div>
                                                </div>
                                            
                                            </form>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="card-body">
                        <div class="text-center">
                            <div class="row justify-content-center">
                                <div class="col-lg-10">
                                    <h4 class="mt-4 font-weight-semibold">Verification de vos informations</h4>
                                    <p class="text-muted mt-3">Pour vérifier vos informations, veuillez cliquer sur le bouton vérifier et dans la boite de dialogue qui s'affiche vous allez renseigner toutes vos informmations .</p>

                                    <div class="mt-2">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#verificationModal">
                                            {{-- Click here for Verification --}} Vérifier
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="row justify-content-center mt-5 mb-2">
                                <div class="col-sm-6 col-8">
                                    <div>
                                        <img src="{{ URL::asset('/assets/images/verification-img.png') }}" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="verificationModal" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">{{-- Verify your Account --}} Vérifier votre compte</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                        <div id="kyc-verify-wizard">
                                            <!-- Personal Info -->
                                            <h3>{{-- Personal Info --}} Informations Personnelles</h3>
                                            <section>
                                                <form class="form-horizontal" action="{{ route('verification.users.store') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="kycfirstname-input" class="form-label">{{-- First name --}} Nom</label>
                                                                <input type="text" class="form-control" name="first_name" id="kycfirstname-input"
                                                                    value="{{ $user->first_name }}">
                                                            </div>
                                                            @error('first_name')
                                                                <span class="text-red-800">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="kyclastname-input" class="form-label">{{-- Last name --}} Prénom</label>
                                                                <input type="text" class="form-control" name="last_name" id="kyclastname-input"
                                                                value="{{ $user->last_name }}">
                                                            </div>
                                                            @error('last_name')
                                                                <span class="text-red-800">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="kycphoneno-input" class="form-label">Adresse</label>
                                                                <input type="text" class="form-control" name="adresse" id="kycphoneno-input"
                                                                    placeholder="Entrer votre adresse">
                                                            </div>
                                                            @error('adresse')
                                                                <span class="text-red-800">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="kycbirthdate-input" class="form-label"> Email</label>
                                                                <input type="text" class="form-control" name="email" id="kycbirthdate-input"
                                                                value="{{ $user->email }}">
                                                            </div>
                                                            @error('email')
                                                                <span class="text-red-800">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="kycfirstname-input" class="form-label">{{-- First name --}} Numéro de téléphone 1</label>
                                                                <input type="number" class="form-control" name="phone_1" id="kycfirstname-input"
                                                                    placeholder="Entrer votre numéro 1">
                                                            </div>
                                                            @error('phone_1')
                                                                <span class="text-red-800">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="kycfirstname-input" class="form-label">{{-- First name --}} Numéro de téléphone 2</label>
                                                                <input type="number" class="form-control" name="phone_2" id="kycfirstname-input"
                                                                    placeholder="Entrer votre numéro 2">
                                                            </div>
                                                            @error('phone_2')
                                                                <span class="text-red-800">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="kycselectcity-input" class="form-label">Sexe</label>
                                                                <select class="form-select" name="sexe" id="kycselectcity-input">
                                                                    <option value="Masculin" selected>Masculin</option>
                                                                    <option value="Feminin">Feminin</option>
                                                                </select>
                                                            </div>
                                                            @error('sexe')
                                                                <span class="text-red-800">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="kycfirstname-input" class="form-label">{{-- First name --}} Numéro IFU</label>
                                                                <input type="number" class="form-control" name="numero_ifu" id="kycfirstname-input"
                                                                    placeholder="Entrer votre numero ifu">
                                                            </div>
                                                            @error('numero_ifu')
                                                                <span class="text-red-800">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                            <!-- Confirm email -->
                                            <h3>Photo de vos pièces</h3>

                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="formFile" class="form-label">Photo d'idantité</label>
                                                                <input class="form-control" type="file" name="image_photo" id="formFile">
                                                            </div>
                                                            @error('image_photo')
                                                                <span class="text-red-800">{{$message}}</span>
                                                            @enderror
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="col-md-12">Photo de la carte d'identité (CIP, LEPI ..)</label>
                                                                <input class="form-control" type="file" name="image_carte_id" id="formFile">
                                                            </div>
                                                            @error('image_carte_id')
                                                                <span class="text-red-800">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="col-md-12">Photo de l'originale de l'IFU</label>
                                                                <input class="form-control" type="file" name="image_ifu" id="formFile">
                                                            </div>
                                                            @error('image_ifu')
                                                                <span class="text-red-800">{{$message}}</span>
                                                            @enderror
                                                        </div>

                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="col-md-12">Photo de la facture (SBEE ou SONEB)</label>
                                                                <input class="form-control" type="file" name="image_facture" id="formFile">
                                                            </div>
                                                            @error('image_facture')
                                                                <span class="text-red-800">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="row mt-5">
                                                        <div class="col-lg-10">
                                                            
                                                        </div>

                                                        <div class="col-lg-2 px-5">
                                                            <button type="submit" class="btn btn-info">Valider</button>
                                                        </div>
                                                    </div>
                                                
                                                </form>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
               
            </div>
        </div>
    </div>
    <!-- end row -->

@endsection
@section('script')
    <!-- jquery step -->
    <script src="{{ URL::asset('/assets/libs/jquery-steps/jquery-steps.min.js') }}"></script>

    <!-- dropzone js -->
    <script src="{{ URL::asset('/assets/libs/dropzone/dropzone.min.js') }}"></script>

    <!-- init js -->
    <script src="{{ URL::asset('/assets/js/pages/crypto-kyc-app.init.js') }}"></script>
@endsection
