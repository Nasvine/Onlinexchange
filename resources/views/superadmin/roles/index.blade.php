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
                                    <li class="breadcrumb-item"><a href="{{ route('administration') }}"><i class="mdi mdi-home-outline"></i>Accueil</a></li>
                                    <li class="breadcrumb-item" aria-current="page">Roles</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="col-12">
                <div class="box">
                  <div class="box-header with-border">
                    <h4 class="box-title">Listes des roles</h4>
                    <div class="box-controls pull-right">
                      <div class="">
                        <a href="{{ route('role.admin.create') }}" class="btn btn-primary">
                           Créer un role
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
                            <th class="text-center">Name</th>
                            <th class="text-center">Permissions</th>
                            <th class="text-center">Actions</th>
                          </tr>
                          @foreach ($roles as $k => $role)
                                <tr>
                                    <td class="text-center">{{ $k + 1 }}</td>
                                    <td class="text-center">{{ $role->name }}</td>
                                    <td class="text-center">
                                        <ul>
                                            @foreach ($role->permissions as $permission)
                                                <li>
                                                    {{ $permission->name  }}
                                                </li> 
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a href="{{ route('role.admin.edit', $role->id) }}" class="btn btn-primary rounded">
                                                Modifier
                                            </a>
                                            <form class="px-1 bg-red-500 hover:bg-red-700 text-white rounded-md"
                                                method="POST" action="{{ route('role.admin.destroy', $role->id) }}"
                                                {{-- onsubmit="return confirm('Etes vous sure de vouloir bien supprimer cet role ?');" --}}>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" data-bs-toggle="tooltip"
                                                    title="Delete">
                                                    Supprimer
                                                </button>
                                            </form>
                                        </div>
                                    </td>

                                    <div class="modal fade bs_{{ $role->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myLargeModalLabel">Formulaire pour modifier un role</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <form action="{{ route('role.admin.update', $role->id) }}" method="POST" enctype="multipart/form-data">
                                                    @csrf

                                                    @method('PUT')
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label">Name</label>
                                                                    <input type="text" class="form-control" name="name" value="{{ $role->name }}">
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
                                    </div>
                                </tr>
                          @endforeach
                        </table>
                      </div>
                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
              </div>

            

            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
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
            </div>
        </div>
    @endsection
