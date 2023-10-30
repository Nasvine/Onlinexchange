@extends('admin.layouts.admin')

@section('content')
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Roles</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
                    <ol class="breadcrumb">
                        <li><a href="#">Roles</a></li>
                        <li class="active">Acceuil</li>
                    </ol>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                <h3 class="box-title">Listes des roles</h3>
                            </div>
                            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                                <button class=" btn btn-info pull-right btn-rounded" type="button" data-toggle="modal" data-target="#exampleModal">Ajouter un role</button>
                            </div>
                           
                        </div>
                        <div class="table-responsive">
                            <table class="table  table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th class="text-center">name</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($roles as $k => $role)
                                        <tr>
                                            <td class="text-center">{{ $k + 1 }}</td>
                                            <td class="text-center">{{ $role->name }}</td>
                                            <td class="text-center"> 

                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-4 col-xs-4">
                                                    </div>
                                                    <div class="col-lg-2 col-sm-4 col-xs-12">
                                                        <button class="btn btn-block btn-info btn-rounded" data-toggle="modal" data-target="#exampleModal_{{ $role->id }}">Modifier</button>
                                                    </div>
                                                    <div class="col-lg-2 col-sm-4 col-xs-12">
                                                        <form class="px-2 py-2 bg-red hover:bg-red-700 text-white rounded-md"
                                                            method="POST" action="{{ route('role.admin.destroy', $role->id ) }}"
                                                            onsubmit="return confirm('Etes vous sure de vouloir bien supprimer cet role ?');">
                                                            @csrf
                                                            @method('DELETE')
                                                        <button class="btn btn-block btn-danger btn-rounded">Supprimer</button>
                                                        </form>
                                                    </div>
                                                    
                                                </div>
                                            </td>
                                        </tr>

                                        <div class="modal fade exampleModal" id="exampleModal_{{ $role->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h4 class="modal-title" id="myLargeModalLabel">Formulaire pour modifier un role</h4> </div>
                            
                                                        <form action="{{ route('role.admin.update', $role->id) }}" method="POST" enctype="multipart/form-data">
                                                            @csrf

                                                            @method('PUT')
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Role</label>
                                                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{ $role->name }}"> 
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-primary waves-effect text-rigth">Valider</button>
                                                            </div>
                                                        </form>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade exampleModal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title" id="myLargeModalLabel">Formulaire pour ajouter un role</h4> </div>

                            <form action="{{ route('role.admin.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Role</label>
                                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Entrer le role"> 
                                    </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary waves-effect text-rigth">Valider</button>
                                </div>
                            </form>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
        </div>
@endsection