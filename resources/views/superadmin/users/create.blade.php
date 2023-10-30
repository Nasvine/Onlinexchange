@extends('superadmin.layouts.superadmin')



@section('content')
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h3 class="page-title">Utilisateurs</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('administration') }}"><i class="mdi mdi-home-outline"></i>Accueil</a></li>
                                <li class="breadcrumb-item" aria-current="page">Utilisateurs</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

			<div class="col-12">
			  <div class="box">
				  
				<div class="box-header">
                    <div class="row">
                        <div class="col-lg-9 col-md-4 col-sm-4 col-xs-12">
                            <h3 class="box-title">Formulaire pour ajouter un utilisateur</h3>
                        </div>
                        <div class="col-lg-3 col-sm-8 col-md-8 col-xs-12">
                            <a href="{{ route('user.admin.index') }}" class="btn btn-info pull-right btn-rounded" >Retour</a>
                        </div>
                    </div>
				</div>
				<div class="box-body">
					
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
                                    <label for="formFile" class="form-label">Photo d'identité</label>
					                <input class="form-control" type="file" name="image_photo" id="formFile">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="col-md-12">Photo de la carte d'identité (CIP, LEPI ..)</label>
                                    <input class="form-control" type="file" name="image_carte_id" id="formFile">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="col-md-12">Photo de l'originale de l'IFU</label>
                                    <input class="form-control" type="file" name="image_ifu" id="formFile">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="col-md-12">Photo de la facture (SBEE ou SONEB)</label>
                                    <input class="form-control" type="file" name="image_facture" id="formFile">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-10 col-md-10 col-sm-4 col-xs-12">
                                
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-8 col-md-8 col-xs-12">
                                <button type="submit" class="btn btn-info">Valider</button>
                            </div>
                        </div>

                    </form>
				</div>
				<!-- /.box-body -->
			  </div>
			  <!-- /.box -->
			</div>
			<!-- ./col -->
		  </div>

    </div>
@endsection
