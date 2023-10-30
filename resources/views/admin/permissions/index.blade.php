@extends('admin.layouts.admin')

@section('content')
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Permissions</h4> </div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <button class="right-side-toggle waves-effect waves-light btn-info btn-circle pull-right m-l-20"><i class="ti-settings text-white"></i></button>
                    <ol class="breadcrumb">
                        <li><a href="#">Permissions</a></li>
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
                                <h3 class="box-title">Listes des Permissions</h3>
                            </div>
                            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                                <button class=" btn btn-info pull-right btn-rounded" type="button" data-toggle="modal" data-target="#exampleModal">Ajouter une permission</button>
                            </div>
                           
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th class="text-center">Name</th>
                                        <th class="text-center" class="text-nowrap">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($permissions as $k => $permission)
                                        <tr>
                                            <td class="text-center">{{ $k + 1 }}</td>
                                            <td class="text-center"><span class="text-center text-primary text-semibold"></i> {{ $permission->name }}</span> </td>
                                            <td class="text-center" class="text-nowrap">
                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-4 col-xs-4">
                                                    </div>
                                                    <div class="col-lg-2 col-sm-4 col-xs-12">
                                                        <button class="btn btn-block btn-info btn-rounded" data-toggle="modal" data-target="#exampleModal_{{ $permission->id }}">Modifier</button>
                                                    </div>
                                                    <div class="col-lg-2 col-sm-4 col-xs-12">
                                                        <form class="px-2 py-2 bg-red hover:bg-red-700 text-white rounded-md"
                                                            method="POST" action="{{ route('permission.admin.destroy', $permission->id ) }}"
                                                            onsubmit="return confirm('Etes vous sure de vouloir bien supprimer cette permission ?');">
                                                            @csrf
                                                            @method('DELETE')
                                                        <button class="btn btn-block btn-danger btn-rounded">Supprimer</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <div class="modal fade exampleModal" id="exampleModal_{{ $permission->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h4 class="modal-title" id="myLargeModalLabel">Formulaire pour modifier une permission</h4>
                                                    </div>
                            
                                                        <form action="{{ route('permission.admin.update', $permission->id) }}" method="POST" enctype="multipart/form-data">
                                                            @csrf

                                                            @method('PUT')
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Name</label>
                                                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{ $permission->name }}"> 
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-primary waves-effect text-rigt">Valider</button>
                                                            </div>
                                                        </form>
                                                </div>
                                            </div>
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
                            <h4 class="modal-title" id="myLargeModalLabel">Formulaire pour ajouter une permission</h4> </div>

                            <form action="{{ route('permission.admin.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Entrer la permission"> 
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
        </div>
@endsection