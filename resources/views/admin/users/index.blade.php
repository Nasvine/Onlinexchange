@extends('admin.layouts.admin')

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
                            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                <h3 class="box-title">Listes des Utilisateurs</h3>
                            </div>
                            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                                <a href="{{ route('user.admin.create') }}" class="btn btn-info pull-right btn-rounded" >Ajouter une utilisateurs</a>
                            </div>
                           
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th class="text-center">Noms & Prénoms</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">Type de compte</th>
                                        <th class="text-center">Status du compte</th>
                                        <th class="text-center">Code de Parrainage</th>
                                        <th class="text-center">Roles</th>
                                        <th class="text-center" class="text-nowrap">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $k => $user)
                                        <tr>
                                            <td>{{ $k + 1 }}</td>
                                            <td class="text-center">{{ $user->first_name }} {{ $user->last_name }}</td>
                                            <td class="text-center"><span class="text-center text-primary text-semibold"> {{ $user->email }}</span> </td>
                                            <td class="text-center"><span class="text-center text-primary text-semibold"> {{ $user->type_de_compte }}</span> </td>
                                            <td class="text-center"><span class="text-center text-primary text-semibold">
                                                @if ($user->statut_de_compte === "non verifier")
                                                    <div class="label label-table label-danger">non verifier</div>
                                                @else
                                                    <div class="label label-table label-success">Verifier</div>
                                                @endif
                                            </span> </td>
                                            <td class="text-center"><span class="text-center text-primary text-semibold"> {{ $user->code_de_parrainage }}</span> </td>
                                            <td class="text-center"><span class="text-center text-primary text-semibold"> {{ $user->role->name }}</span> </td>
                                            <td class="text-center" class="text-nowrap">
                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-12  col-md-6  col-xs-12">
                                                        <a href="{{ route('user.admin.edit', $user->id) }}" class="btn btn-block btn-info btn-rounded">Modifier</a>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-12  col-md-6 col-xs-12">
                                                        <a href="{{ route('user.admin.show', $user->id) }}" class="btn btn-block btn-primary btn-rounded">Détails</a>
                                                    </div>
                                                    <div class="col-lg-4 col-sm-12 col-md-6  col-xs-12">
                                                        <form class="px-2 py-2 bg-red hover:bg-red-700 text-white rounded-md"
                                                            method="POST" action="{{ route('user.admin.destroy', $user->id ) }}"
                                                            onsubmit="return confirm('Etes vous sure de vouloir bien supprimer cet user ?');">
                                                            @csrf
                                                            @method('DELETE')
                                                        <button class="btn btn-block btn-danger btn-rounded">Supprimer</button>
                                                        </form>
                                                    </div>
                                                    
                                                </div>
                                            </td>
                                        </tr>

                                        <div class="modal fade exampleModal" id="#exampleModal_{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h4 class="modal-title" id="myLargeModalLabel">Formulaire pour modifier un utilisateur</h4> </div>
                            
                                                        {{-- <form action="{{ route('user.admin.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="modal-body">
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Poste</label>
                                                                    <input type="text" name="poste" class="form-control" id="exampleInputEmail1" value="{{ $user->poste }}"> 
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Tâches effectuées</label>
                                                                    <textarea type="text" name="description" class="form-control" value="{{ $user->description }}" rows="5"></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Date de début</label>
                                                                    <input type="date" name="date_debut" class="form-control" id="exampleInputEmail1" value="{{ $user->date_debut }}"> 
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Date de fin</label>
                                                                    <input type="date" name="date_fin" class="form-control" id="exampleInputEmail1" value="{{ $user->date_fin }}"> 
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-primary waves-effect text-rigth" data-dismiss="modal">Valider</button>
                                                            </div>
                                                        </form> --}}
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

           {{--  <div class="modal fade exampleModal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title" id="myLargeModalLabel">Formulaire pour ajouter une user</h4> </div>

                            <form action="{{ route('user.admin.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Poste</label>
                                        <input type="text" name="poste" class="form-control" id="exampleInputEmail1" placeholder="Entrer le poste occupé"> 
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tâches effectuées</label>
                                        <textarea type="text" name="description" class="form-control" placeholder="Entrer les taches effectuées" rows="5"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Date de début</label>
                                        <input type="date" name="date_debut" class="form-control" id="exampleInputEmail1" placeholder="Entrer la date de début"> 
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Date de fin</label>
                                        <input type="date" name="date_fin" class="form-control" id="exampleInputEmail1" placeholder="Entrer la date de fin"> 
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary waves-effect text-rigth" data-dismiss="modal">Valider</button>
                                </div>
                            </form>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div> --}}
        </div>
@endsection