@extends('superadmin.layouts.superadmin')



@section('content')
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h3 class="page-title">Roles</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('role.admin.index') }}"><i class="mdi mdi-home-outline"></i>Accueil</a></li>
                                <li class="breadcrumb-item" aria-current="page">Formulaire</li>
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
                            <h3 class="box-title">Formulaire pour ajouter un role</h3>
                        </div>
                        <div class="col-lg-3 col-sm-8 col-md-8 col-xs-12">
                            <a href="{{ route('role.admin.index') }}" class="btn btn-info pull-right btn-rounded" >Retour</a>
                        </div>
                    </div>
				</div>
				<div class="box-body">
					
                    <form class="form-horizontal" action="{{ route('role.admin.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="col-md-12">Role</label>
                                    <div class="col-md-12">
                                        <input type="text" name="name" class="form-control" placeholder="Entrer le nom du role"> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="form-group">
                                    <label class="col-md-12">Permission</label>
                                    <select class="form-control select2" multiple="multiple" name="permissions[]" data-placeholder="Select a State" style="width: 100%;">
                                        @foreach ($permissions as $k => $permission)
                                            <option value="{{ $permission->id }}">{{ $k + 1 }} - {{ $permission->name }}</option>
                                        @endforeach
                                    </select>
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
