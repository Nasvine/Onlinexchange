@extends('superadmin.layouts.superadmin')



@section('content')
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h3 class="page-title">Verification</h3>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('verificationcompte.users.index') }}"><i class="mdi mdi-home-outline"></i>Accueil</a></li>
                                    <li class="breadcrumb-item" aria-current="page">Verification</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="col-12">
                <div class="box">
                  <div class="box-header with-border">
                    <h4 class="box-title">Listes des comptes à vérifier</h4>
                    <div class="box-controls pull-right">
                      <div class="">
                        {{-- <a href="{{ route('user.admin.create') }}" class="btn btn-primary">
                            Ajouter un utilisateur
                        </a> --}}
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
                                <th class="text-center">Statut du compte</th>
                                <th class="text-center">Informations</th>
                                <th class="text-center">Validation du compte</th>
                                <th class="text-center">Refus du compte</th>
                            </tr>

                            <tbody>
                                @foreach ($users as $k => $user)
                                    <tr>
                                        <td>{{ $k + 1 }}</td>
                                        <td class="text-center">{{ $user->first_name }} {{ $user->last_name }}</td>
                                        <td class="text-center"><span class="text-center text-primary text-semibold"> {{ $user->email }}</span> </td>
                                        <td class="text-center"><span class="text-center text-primary text-semibold"> {{ $user->statut_de_compte }}</span> </td>
                                        <td class="text-center"><span class="text-center text-primary text-semibold">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#verificationModal">
                                            {{-- Click here for Verification --}} Voir Infos
                                             </button>
                                        </td>
                                        <td class="text-center">
                                            <span class="text-center text-primary text-semibold">
                                                <a href="{{ route('verificationcompte.users.confirmer', $user->id) }}" class="btn btn-block btn-info rounded">Confirmer</a>
                                            </span> 
                                        </td>
                                        <td class="text-center">
                                            <span class="text-center text-primary text-semibold"> 
                                                <button type="button" class="btn btn-danger rounded" data-bs-toggle="modal" data-bs-target="#modal-fill">
                                                    Rejecter
                                                  </button>
{{--                                                 <a href="{{ route('verificationcompte.users.rejete', $user->id) }}" class="btn btn-block btn-danger rounded">Rejecter</a>
 --}}                                            </span> 
                                        </td>
                                    </tr>
                                    <div class="modal modal-fill fade" data-backdrop="false" id="modal-fill" tabindex="-1">
                                        <div class="modal-dialog">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title">Formulaire </h5>
                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="{{ route('verificationcompte.users.rejete', $user->id) }}" method="post">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label class="form-label">Motif du rejet</label>
                                                        <textarea rows="4" name="motif" class="form-control" placeholder="Entrer le motif"></textarea>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary float-end">Valider</button>
                                                </div>
                                            </form>
                                          </div>
                                        </div>
                                      </div>
                                @endforeach
                            </tbody>
                        </table>
                      </div>
                      <div class="modal fade" id="verificationModal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">{{-- Verify your Account --}} Véfifier votre compte</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">

                                    <div id="kyc-verify-wizard">
                                        <!-- Personal Info -->
                                        <section>
                                            <div class="row">
                                                
                                                <div class="col-12 col-lg-12 col-xl-12">
                                                    <div class="box box-widget widget-user">
                                                       <!-- Add the bg color to the header using any of the bg-* classes -->
                                                       <div class="widget-user-header bg-img bbsr-0 bber-0" style="background: url('../images/gallery/full/10.jpg') center center;" data-overlay="5">
                                                        {{-- <h6 class="widget-user-desc text-white">Designer</h6> --}}
                                                    </div>
                                                    <div class="widget-user-image">
                                                        @if(isset($user->profile) && $user->profile->image_photo)
                                                        <img class="rounded-circle mb-5" style="height: 50px; width:50px" src="{{ asset('utilisateurs/images/image_profile/'.$user->profile->image_photo) }}" alt="User Avatar">
                                                        @endif
                                                        
                                                    </div>
                                                    <div class="box-footer">
                                                        @if(isset($user->profile) && $user->profile->image_photo)
                                                           <h3 class="widget-user-username text-black text-center">{{ $user->profile->first_name }} {{ $user->profile->last_name }}</h3>
                                                        @endif 
                                                         <!-- /.row -->
                                                       </div>
                                                     </div>
                                                    
                                                      <!-- /.box-body -->
                                                    </div>
                                                     <div class="box">
                                                       <div class="box-body box-profile">            
                                                         <div class="row">
                                                           <div class="col-12">
                                                            <div class="box-header with-border">
                                                                <h4 class="box-title">Informations Personnelles</h4>
                                                              </div>
                                                              <!-- /.box-header -->
                                                              <div class="box-body">
                                                                  <div class="table-responsive">
                                                                    <table class="table table-hover mb-0">
                                                                        <tbody>
                                                                            @if(isset($user->profile) && $user->profile->image_photo)
                                                                                <tr>
                                                                                    <th scope="col"> <u>Email:</u> </th>
                                                                                    <th><span  class="text-gray ps-10">{{ $user->profile->email }}</span></th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="col"><u>Phone 1:</u></th>
                                                                                    <th><span  class="text-gray ps-10">{{ $user->profile->phone_1 }}</span></th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="col"><u>Phone 2:</u></th>
                                                                                    <th><span  class="text-gray ps-10">{{ $user->profile->phone_2 }}</span></th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="col"><u>Sexe:</u></th>
                                                                                    <th><span  class="text-gray ps-10">{{ $user->profile->sexe }}</span></th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="col"><u>Numéro IFU:</u></th>
                                                                                    <th><span  class="text-gray ps-10">{{ $user->profile->numero_ifu }}</span></th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="col"><u>Type de Compte:</u></th>
                                                                                    <th><span  class="text-gray ps-10">{{ $user->type_de_compte }}</span></th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="col"><u>Status du compte:</u></th>
                                                                                    <th><span  class="text-gray ps-10">{{ $user->statut_de_compte }}</span></th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="col"><u>Code de parrainage:</u></th>
                                                                                    <th><span  class="text-gray ps-10">{{ $user->code_de_parrainage }}</span></th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="col"><u>Lien de parrainage:</u></th>
                                                                                    <th><span  class="text-gray ps-10">{{ $user->lien_de_parrainage }}</span></th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="col"><u>Gains de parrainage:</u></th>
                                                                                    <th><span  class="text-gray ps-10">{{ $user->gains_de_parrainage }}</span></th>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="col"><u>Role:</u></th>
                                                                                    <th><span  class="text-gray ps-10">{{ $user->role->name }}</span></th>
                                                                                </tr>
                                                                                @endif
                                                                        </tbody>
                                                                       
                                                                      </table>
                                                                  </div>
                                                              </div>
                                                               {{-- <div>
                                                                   <p> <u>Email  : </u> <span  class="text-gray ps-10">{{ $user->email }}</span> </p>
                                                                   @if(isset($user->profile) && $user->profile->image_photo)
                                                                        <p> <u>Phone 1  : </u> <span class="text-gray ps-10">{{ $user->profile->phone_1 }}</span></p>
                                                                        <p> <u>Phone 2  : </u> <span class="text-gray ps-10">{{ $user->profile->phone_2 }}</span></p>
                                                                        <p> <u>Sexe  : </u> <span class="text-gray ps-10">{{ $user->profile->sexe }}</span></p>
                                                                        <p> <u>Numéro IFU  : </u> <span class="text-gray ps-10">{{ $user->profile->numero_ifu }}</span></p>
                                                                   @endif
                                        
                                                                   <p> <u>Type de Compte  : </u> <span class="text-gray ps-10">{{ $user->type_de_compte }}</span></p>
                                                                   <p> <u>Status du compte  : </u> <span class="text-gray ps-10">{{ $user->statut_de_compte }}</span></p>
                                                                   <p> <u>Code de parrainage  : </u> <span class="text-gray ps-10">{{ $user->code_de_parrainage }}</span></p>
                                                                   <p> <u>Lien de parrainage  : </u> <span class="text-gray ps-10">{{ $user->lien_de_parrainage }}</span></p>
                                                                   <p> <u>Gains de parrainage  : </u> <span class="text-gray ps-10">{{ $user->gains_de_parrainage }}</span></p>
                                                                   <p> <u>Role  : </u> <span class="text-gray ps-10">{{ $user->role->name }}</span></p>
                                                                   <p> <u>Permissions  : </u> 
                                                                            <ul class="text-gray ps-10">
                                                                                @foreach ($user->role->permissions as $permission)
                                                                                    <li>
                                                                                          {{ $permission->name }}
                                                                                    </li>
                                                                                @endforeach
                                                                            </ul>
                                                                   </p>
                                                               </div> --}}
                                                           </div>
                                                         </div>
                                                       </div>
                                                       <!-- /.box-body -->
                                                     </div>
                                                   <div class="box">
                                                    
                                                   </div>
                                                 </div>
                                            </div>

                                            <div class="row">
                                                
                                                 <div class="col-12 col-lg-12 col-xl-12">
                                                    
                                                  <div class="nav-tabs-custom">
                                                    <ul class="nav nav-tabs">
                                                      <li><a href="#usertimeline" data-bs-toggle="tab">Toutes les Photos</a></li>
                                                    </ul>
                                        
                                                    <div class="tab-content">
                                        
                                                     <div class="active tab-pane" id="usertimeline">
                                                        <div class="box p-15"> 
                                                            <div class="timeline timeline-single-column timeline-single-full-column">
                                                                
                                                                <span class="timeline-label">
                                                                    <span class="badge badge-info badge-pill">Images</span>
                                                                </span>
                                        
                                                                <div class="timeline-item">
                                                                    <div class="timeline-point timeline-point-success">
                                                                        <i class="fa fa-image"></i>
                                                                    </div>
                                                                    <div class="timeline-event">
                                                                        <div class="timeline-heading">
                                                                            <h4 class="timeline-title"><a href="#">Image de Profile</a></h4>
                                                                        </div>
                                                                        <div class="timeline-body">
                                                                            @if(isset($user->profile) && $user->profile->image_photo)
                                                                                <img  src="{{ asset('utilisateurs/images/image_profile/'.$user->profile->image_photo) }}"  alt="..." class="m-10">
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="timeline-item">
                                                                    <div class="timeline-point timeline-point-success">
                                                                        <i class="fa fa-image"></i>
                                                                    </div>
                                                                    <div class="timeline-event">
                                                                        <div class="timeline-heading">
                                                                            <h4 class="timeline-title"><a href="#">Image de la Carte d'identité</a></h4>
                                                                        </div>
                                                                        <div class="timeline-body">
                                                                            @if(isset($user->profile) && $user->profile->image_photo)
                                                                                <img src="{{ asset('utilisateurs/images/image_carte_identite/'.$user->profile->image_carte_id) }}" alt="..." class="m-10">
                                                                            @endif
                                        
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="timeline-item">
                                                                    <div class="timeline-point timeline-point-success">
                                                                        <i class="fa fa-image"></i>
                                                                    </div>
                                                                    <div class="timeline-event">
                                                                        <div class="timeline-heading">
                                                                            <h4 class="timeline-title"><a href="#">Image de l'originale de l'IFU</a></h4>
                                                                        </div>
                                                                        <div class="timeline-body">
                                                                            @if(isset($user->profile) && $user->profile->image_photo)
                                                                                <img src="{{ asset('utilisateurs/images/image_ifu/'.$user->profile->image_ifu) }}" alt="..." class="m-10">
                                                                            @endif
                                        
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="timeline-item">
                                                                    <div class="timeline-point timeline-point-success">
                                                                        <i class="fa fa-image"></i>
                                                                    </div>
                                                                    <div class="timeline-event">
                                                                        <div class="timeline-heading">
                                                                            <h4 class="timeline-title"><a href="#">Image de la facture</a></h4>
                                                                        </div>
                                                                        <div class="timeline-body">
                                                                            @if(isset($user->profile) && $user->profile->image_photo)
                                                                                <img src="{{ asset('utilisateurs/images/image_facture/'.$user->profile->image_facture) }}" alt="..." class="m-10">
                                                                            @endif
                                        
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>  
                                                      </div>    
                                                    </div>
                                                    <!-- /.tab-content -->
                                                  </div>
                                                  <!-- /.nav-tabs-custom -->
                                                
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
              </div>

           
        </div>
    @endsection
