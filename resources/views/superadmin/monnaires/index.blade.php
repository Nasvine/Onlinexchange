@extends('superadmin.layouts.superadmin')



@section('content')
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h3 class="page-title">monnaires</h3>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('administration') }}"><i class="mdi mdi-home-outline"></i>Accueil</a></li>
                                    <li class="breadcrumb-item" aria-current="page">monnaires</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="col-12">
                <div class="box">
                  <div class="box-header with-border">
                    <h4 class="box-title">Listes des monnaires</h4>
                    <div class="box-controls pull-right">
                      <div class="">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">
                            Ajouter une monnaire
                        </button>
                      </div>
                    </div>
                  </div>
                  <!-- /.box-header -->
                  <div class="box-body no-padding">
                      <div class="table-responsive">
                        <table class="table table-hover">
                          <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Nom de la monnaire</th>
                            <th class="text-center">Symbole de la monnaire</th>
                            <th class="text-center">Type de monnaire</th>
                            <th class="text-center">Stock</th>
                            <th class="text-center">Actions</th>
                          </tr>
                          @foreach ($monnaires as $k => $monnaire)
                                <tr>
                                    <td class="text-center">{{ $k + 1 }}</td>
                                    <td class="text-center">{{ $monnaire->name_of_monnaie }}</td>
                                    <td class="text-center">{{ $monnaire->symbol_of_monnaie }}</td>
                                    <td class="text-center">{{ $monnaire->type_of_monnaie }}</td>
                                    <td class="text-center">{{ $monnaire->stock_disponible }}</td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-primary rounded" data-bs-toggle="modal" data-bs-target=".bs_{{ $monnaire->id }}">
                                                Modifier
                                            </button>
                                            <form class="px-1 bg-red-500 hover:bg-red-700 text-white rounded-md"
                                                method="POST" action="{{ route('monnaire.admin.destroy', $monnaire->id) }}"
                                                {{-- onsubmit="return confirm('Etes vous sure de vouloir bien supprimer cette monnaire ?');" --}}>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" data-bs-toggle="tooltip"
                                                    title="Delete">
                                                    Supprimer
                                                </button>
                                            </form>
                                        </div>
                                    </td>

                                    <div class="modal fade bs_{{ $monnaire->id }}" tabindex="-1" monnaire="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myLargeModalLabel">Formulaire pour modifier une monnaire</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <form action="{{ route('monnaire.admin.update', $monnaire->id) }}" method="POST" enctype="multipart/form-data">
                                                    @csrf

                                                    @method('PUT')
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label">Nom de la monnaire</label>
                                                                    <input type="text" class="form-control" name="name_of_monnaie" value="{{ $monnaire->name_of_monnaie }}">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label">Symbole de la monnaire</label>
                                                                    <input type="text" class="form-control" name="symbol_of_monnaie" value="{{ $monnaire->symbol_of_monnaie }}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label class="form-label">Type de monnaie</label>
                                                                <div class="form-group">
                                                                    <select class="form-control" name="type_of_monnaie">
                                                                        <option> -- Selectionnez le type de monnaie --</option>
                                                                        <option value="fiat">Fiat</option>
                                                                        <option value="crypto">Cryptomonnaire</option>
                                                                    </select> 
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label">Stock</label>
                                                                    <input type="number" class="form-control" name="stock_disponible" value="{{ $monnaire->stock_disponible }}">
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

            

            <div class="modal fade bs-example-modal-lg" tabindex="-1" monnaire="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myLargeModalLabel">Formulaire pour ajouter une monnaire</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ route('monnaire.admin.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Nom de la monnaire</label>
                                            <input type="text" class="form-control" name="name_of_monnaie" placeholder="Entrer le nom de la monnaire">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Symbole de la monnaire</label>
                                            <input type="text" class="form-control" name="symbol_of_monnaie" placeholder="Entrer le symbole de la monnaire">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label class="form-label">Type de monnaie</label>
                                        <div class="form-group">
                                            <select class="form-control" name="type_of_monnaie">
                                                <option> -- Selectionnez le type de monnaie --</option>
                                                <option value="fiat">Fiat</option>
                                                <option value="crypto">Cryptomonnaire</option>
                                            </select> 
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Stock</label>
                                            <input type="number" class="form-control" name="stock_disponible" placeholder="Entrer le stock de la monnaire">
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
