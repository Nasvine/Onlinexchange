@extends('admin.layouts.admin')

@section('css')
@endsection

@section('content')
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Profiles</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
                    <ol class="breadcrumb">
                        <li><a href="#">Profiles</a></li>
                        <li class="active">Acceuil</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-md-4 col-xs-12">
                    <div class="white-box">
                        <div class="user-bg"> <img width="100%" alt="user" src="{{ asset('utilisateurs/images/image_profile/'.$user->profile->image_photo) }}">
                            <div class="overlay-box">
                                <div class="user-content">
                                    <a href="javascript:void(0)"><img src="{{ asset('utilisateurs/images/image_profile/'.$user->profile->image_photo) }}" class="thumb-lg img-circle" alt="img"></a>
                                    <h4 class="text-white">{{ $user->first_name }}   {{ $user->last_name }}</h4>
                                    <h5 class="text-white">{{ $user->email }}</h5> </div>
                            </div>
                        </div>
                       {{--  <div class="user-btm-box">
                            <div class="col-md-4 col-sm-4 text-center">
                                <p class="text-purple"><i class="ti-facebook"></i></p>
                                <h1>258</h1> </div>
                            <div class="col-md-4 col-sm-4 text-center">
                                <p class="text-blue"><i class="ti-twitter"></i></p>
                                <h1>125</h1> </div>
                            <div class="col-md-4 col-sm-4 text-center">
                                <p class="text-danger"><i class="ti-dribbble"></i></p>
                                <h1>556</h1> </div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-md-8 col-xs-12">
                    <div class="white-box">
                        <ul class="nav nav-tabs tabs customtab">
                            <li class="active tab">
                                <a href="#profile" data-toggle="tab"> <span class="visible-xs"><i class="fa fa-user"></i></span> <span class="hidden-xs">Profile</span> </a>
                            </li>
                            <li class="tab">
                                <a href="#messages" data-toggle="tab" aria-expanded="true"> <span class="visible-xs"><i class="fa fa-envelope-o"></i></span> <span class="hidden-xs">Image Carte</span> </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            
                            <div class="tab-pane active" id="profile">
                                <div class="row">
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Nom & Prénom</strong>
                                        <br>
                                        <p class="text-muted">{{ $user->first_name }}   {{ $user->last_name }}</p>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Email</strong>
                                        <br>
                                        <p class="text-muted">{{ $user->email }}</p>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Adresse</strong>
                                        <br>
                                        <p class="text-muted">{{ $user->profile->adresse }}</p>
                                    </div>
                                    <div class="col-md-3 col-xs-6"> <strong>Numéro de téléphone 1</strong>
                                        <br>
                                        <p class="text-muted">{{ $user->profile->phone_1 }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Numéro de téléphone 2</strong>
                                        <br>
                                        <p class="text-muted">{{ $user->profile->phone_2 }}</p>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Sexe</strong>
                                        <br>
                                        <p class="text-muted">{{ $user->profile->sexe }}</p>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Type de Compte</strong>
                                        <br>
                                        <p class="text-muted">{{ $user->type_de_compte }}</p>
                                    </div>
                                    <div class="col-md-3 col-xs-6"> <strong>Status du compte</strong>
                                        <br>
                                        <p class="text-muted">{{ $user->statut_de_compte }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Code de parrainage</strong>
                                        <br>
                                        <p class="text-muted">{{ $user->code_de_parrainage }}</p>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Lien de parrainage</strong>
                                        <br>
                                        <p class="text-muted">{{ $user->lien_de_parrainage }}</p>
                                    </div>
                                    <div class="col-md-3 col-xs-6 b-r"> <strong>Numéro IFU</strong>
                                        <br>
                                        <p class="text-muted">{{ $user->profile->numero_ifu }}</p>
                                    </div>
                                    <div class="col-md-3 col-xs-6"> <strong>Gains de parrainage</strong>
                                        <br>
                                        <p class="text-muted">{{ $user->gains_de_parrainage }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="messages">
                                <div class="steamline">
                                    <div class="sl-item">
                                        <div class="sl-left"> <img src=" {{ asset('utilisateurs/images/image_profile/'.$user->profile->image_photo) }}" alt="user" class="img-circle" /> </div>
                                        <div class="sl-right">
                                            <div class="m-l-40"> <a href="#" class="text-info">Image de Profile</a>
                                                <div class="m-t-20 row">
                                                    <div class="col-lg-12">
                                                        <img src="{{ asset('utilisateurs/images/image_profile/'.$user->profile->image_photo) }}" alt="user" class="img-responsive" height="400px" width="400px" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="sl-item">
                                        <div class="sl-left"> <img src="{{ asset('utilisateurs/images/image_carte_identite/'.$user->profile->image_carte_id) }}" alt="user" class="img-circle" /> </div>
                                        <div class="sl-right">
                                            <div class="m-l-40"> <a href="#" class="text-info">Image de la Carte d'identité</a>
                                                <div class="m-t-20 row">
                                                    <div class="col-lg-12">
                                                        <img src="{{ asset('utilisateurs/images/image_carte_identite/'.$user->profile->image_carte_id) }}" alt="user" class="img-responsive" height="400px" width="400px" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="sl-item">
                                        <div class="sl-left"> <img src="{{ asset('utilisateurs/images/image_ifu/'.$user->profile->image_ifu) }}" alt="user" class="img-circle" /> </div>
                                        <div class="sl-right">
                                            <div class="m-l-40"> <a href="#" class="text-info">Image de l'originale de l'IFU</a>
                                                <div class="m-t-20 row">
                                                    <div class="col-lg-12">
                                                        <img src="{{ asset('utilisateurs/images/image_ifu/'.$user->profile->image_ifu) }}" alt="user" class="img-responsive" height="400px" width="400px" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="sl-item">
                                        <div class="sl-left"> <img src="{{ asset('utilisateurs/images/image_facture/'.$user->profile->image_facture) }}" alt="user" class="img-circle" /> </div>
                                        <div class="sl-right">
                                            <div class="m-l-40"> <a href="#" class="text-info">Image de la facture</a>
                                                <div class="m-t-20 row">
                                                    <div class="col-lg-12">
                                                        <img src="{{ asset('utilisateurs/images/image_facture/'.$user->profile->image_facture) }}" alt="user" class="img-responsive" height="400px" width="400px" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @section('js')
         @endsection
@endsection