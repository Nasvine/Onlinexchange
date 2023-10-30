@extends('admin.layouts.admin')

@section('css')
@endsection

@section('content')
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Utilisateurs</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
                    <ol class="breadcrumb">
                        <li><a href="#">Utilisateurs</a></li>
                        <li class="active">Acceuil</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <div class="row">
                            <div class="col-lg-9 col-md-4 col-sm-4 col-xs-12">
                                <h3 class="box-title">Formulaire pour ajouter un utilisateur</h3>
                            </div>
                            <div class="col-lg-3 col-sm-8 col-md-8 col-xs-12">
                                <a href="{{ route('user.admin.index') }}" class="btn btn-info pull-right btn-rounded" >Retour</a>
                            </div>
                        </div>
                        <form class="form-horizontal" action="{{ route('user.admin.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="col-md-12">Nom</label>
                                        <div class="col-md-12">
                                            <input type="text" name="first_name" class="form-control" placeholder="Entrer votre nom"> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="col-md-12">Prénom</label>
                                        <div class="col-md-12">
                                            <input type="text" name="last_name" class="form-control" placeholder="Entrer votre prénom"> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="email" name="email" class="form-control" placeholder="Entrer votre email"> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="col-md-12">Adresse</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" name="adresse" placeholder="Entrer votre adresse"> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="col-md-12">Numéro de téléphone 1 *</label>
                                        <div class="col-md-12">
                                            <input type="number" name="phone_1" class="form-control" placeholder="Entrer votre numéro de téléphone"> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="col-md-12">Numéro de téléphone 2 ( facultatif )</label>
                                        <div class="col-md-12">
                                            <input type="number" name="phone_2" class="form-control" placeholder="Entrer votre second numéro de téléphone"> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="col-md-12">Numéro IFU</label>
                                        <div class="col-md-12">
                                            <input type="number" name="numero_ifu" class="form-control" placeholder="Entrer votre numéro IFU"> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="col-md-12">Sexe</label>
                                        <div class="col-md-12">
                                            <select class="form-control" name="sexe">
                                                <option> -- Selectionnez le sexe --</option>
                                                <option value="Masculin">Masculin</option>
                                                <option value="Feminin">Féminin</option>
                                            </select> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="col-md-12">Type de compte</label>
                                        <div class="col-md-12">
                                            <select class="form-control" name="type_de_compte">
                                                <option> -- Selectionnez le type de compte --</option>
                                                <option value="mini">Mini</option>
                                                <option value="standard">Standard</option>
                                            </select> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="col-md-12">Code de Parrainage</label>
                                        <div class="col-md-12">
                                            <input type="number" name="code_de_parrainage" class="form-control" placeholder="Entrer votre code de parrainage"> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="col-md-12">Lien de parrainage</label>
                                        <div class="col-md-12">
                                            <input type="text" name="lien_de_parrainage" class="form-control" placeholder="Entrer votre lien de parrainage"> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="col-md-12">Entité</label>
                                        <div class="col-md-12">
                                            <label class="radio-inline p-0">
                                                <div class="radio radio-info">
                                                    <input type="radio" name="is_admin" id="radio1" value="1">
                                                    <label for="radio1">Admin</label>
                                                </div>
                                            </label>
                                            <label class="radio-inline">
                                                <div class="radio radio-info">
                                                    <input type="radio" name="is_admin" id="radio2" value="0">
                                                    <label for="radio2">User </label>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="col-md-12">Mot de Passe</label>
                                        <div class="col-md-12">
                                            <input type="password" name="password" class="form-control" placeholder="Entrer votre mot de passe"> 
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="col-md-12">Role</label>
                                        <div class="col-md-12">
                                            <select class="form-control" name="role_id">
                                                <option> -- Selectionnez le role --</option>
                                                    @foreach ($roles as $k => $role)
                                                        <option value="{{ $role->id }}">{{ $k + 1 }} - {{ $role->name }}</option>
                                                    @endforeach
                                            </select> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="col-md-12">Photo d'idantité</label>
                                        <div class="col-sm-12">
                                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Selectionner la photo</span> <span class="fileinput-exists">Change</span>
                                                <input type="file" name="image_photo"> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="col-md-12">Photo de la carte d'identité (CIP, LEPI ..)</label>
                                        <div class="col-md-12">
                                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Selectionner la photo</span> <span class="fileinput-exists">Change</span>
                                                <input type="file" name="image_carte_id"> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="col-md-12">Photo de l'originale de l'IFU</label>
                                        <div class="col-md-12">
                                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Selectionner la photo</span> <span class="fileinput-exists">Change</span>
                                                <input type="file" name="image_ifu"> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="col-md-12">Photo de la facture (SBEE ou SONEB)</label>
                                        <div class="col-md-12">
                                            <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                                <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div> <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Selectionner la photo</span> <span class="fileinput-exists">Change</span>
                                                <input type="file" name="image_facture"> </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-9 col-md-4 col-sm-4 col-xs-12">
                                    r
                                </div>
                                <div class="col-lg-3 col-sm-8 col-md-8 col-xs-12">
                                    <button type="submit" class="btn btn-info">Valider</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @section('js')
         @endsection
@endsection