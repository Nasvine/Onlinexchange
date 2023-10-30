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

            <div class="col-12">
                <div class="box">
                  <div class="box-header with-border">
                    <h4 class="box-title">Listes des utilisateurs</h4>
                    <div class="box-controls pull-right">
                      <div class="">
                        <a href="{{ route('user.admin.create') }}" class="btn btn-primary">
                            Ajouter un utilisateur
                        </a>
                      </div>
                    </div>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body no-padding">
                      <div class="table-responsive">
                        <table class="table table-hover">
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Noms & Prénoms</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Type de compte</th>
                                <th class="text-center">Status du compte</th>
                                <th class="text-center">Code de Parrainage</th>
                                <th class="text-center">Roles</th>
                                <th class="text-center" class="text-nowrap">Actions</th>
                            </tr>

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
                                                    <a href="{{ route('user.admin.edit', $user->id) }}" class="btn btn-block btn-info rounded"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                </div>
                                                <div class="col-lg-4 col-sm-12  col-md-6 col-xs-12">
                                                    <a href="{{ route('user.admin.show', $user->id) }}" class="btn btn-block btn-primary rounded"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                                </div>
                                                <div class="col-lg-4 col-sm-12 col-md-6  col-xs-12">
                                                    <form class=""
                                                        method="POST" action="{{ route('user.admin.destroy', $user->id ) }}"
                                                        {{-- onsubmit="return confirm('Etes vous sure de vouloir bien supprimer cet user ?');" --}}>
                                                        @csrf
                                                        @method('DELETE')
                                                    <button class="btn btn-block btn-danger rounded"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                                    </form>
                                                </div>
                                                
                                            </div>

                                           {{--  <div class="btn-group">
                                                <button type="button" class="btn btn-primary rounded" data-bs-toggle="modal" data-bs-target=".bs_{{ $user->id }}">
                                                    Modifier
                                                </button>

                                                <button type="button" class="px-1 btn btn-primary rounded" data-bs-toggle="modal" data-bs-target=".bs_{{ $user->id }}">
                                                    Modifier
                                                </button>
                                                <form class="px-1 bg-red-500 hover:bg-red-700 text-white rounded-md"
                                                    method="POST" action="{{ route('user.admin.destroy', $user->id) }}"
                                                    onsubmit="return confirm('Etes vous sure de vouloir bien supprimer cet user ?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger" data-bs-toggle="tooltip"
                                                        title="Delete">
                                                        Supprimer
                                                    </button>
                                                </form>
                                            </div> --}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                      </div>
                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
              </div>

            

            {{-- <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myLargeModalLabel">Formulaire pour ajouter un role</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ route('role.admin.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Name</label>
                                            <input type="text" class="form-control" name="name" placeholder="Entrer le role">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer text-end">
                                <button type="submit" class="btn btn-primary">Valider</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div> --}}
        </div>
    @endsection
