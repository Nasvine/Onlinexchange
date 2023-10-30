<?php

namespace App\Http\Controllers\admin\users;

use App\Models\User;
use App\Models\Profile;
use App\Models\admin\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('superadmin.users.index', compact('users'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::all();
        return view('superadmin.users.create', compact('roles'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $validation = $request->validate([
            "first_name"             => "required",
            "last_name"              => "required",
            "email"                  => "required",
            "sexe"                   => "required",
            "phone_1"                => "required",
            "phone_2"                => "required",
            "adresse"                => "required",
            "type_de_compte"         => "required",
            //"statut_de_compte"       => "required",
            "is_admin"               => "required",
            "code_de_parrainage"     => "nullable",
            "lien_de_parrainage"     => "nullable",
            "image_photo"            => "nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048",
            "image_carte_id"         => "nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048",
            "image_ifu"              => "nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048",
            "image_facture"          => "nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048",
            "numero_ifu"             => "required",
            "role_id"                => "required",
            "password"               => "required",
            //"gains_de_parrainage"    => "nullable",
        ]);

        //dd($request->all(), $validation);

        
        if(($request->file('image_photo')) && ($request->file('image_carte_id')) && ($request->file('image_ifu')) && ($request->file('image_facture'))){
            
            $tab_user = array(
                'first_name'            =>  $validation['first_name'],
                'last_name'             =>  $validation['last_name'],
                'email'                 =>  $validation['email'],
                'type_de_compte'        =>  $validation['type_de_compte'],
                //'statut_de_compte'      =>  $validation['statut_de_compte'],
                'is_admin'              =>  $validation['is_admin'],
                'code_de_parrainage'    =>  $validation['code_de_parrainage'],
                'lien_de_parrainage'    =>  $validation['lien_de_parrainage'],
                //'gains_de_parrainage'   =>  $validation['gains_de_parrainage'],
                'password'              =>  Hash::make($validation['password']),
                'role_id'               =>  $validation['role_id'],
            );
           
            #Image Photo
            
            $extension = $validation['image_photo']->getClientOriginalExtension();
            $image_photo = $validation['first_name'].'_'.$validation['last_name'].'_'. $validation['phone_1'].'.'.$extension;
            $request->image_photo->move(public_path('utilisateurs/images/image_profile'), $image_photo);
            
            #Image Carte D'identité

            $extension = $validation['image_carte_id']->getClientOriginalExtension();
            $image_carte_id = $validation['first_name'].'_'.$validation['last_name'].'_'. $validation['phone_1'].'.'.$extension;
            $request->image_carte_id->move(public_path('utilisateurs/images/image_carte_identite'), $image_carte_id);
           
            #Image Ifu

            $extension = $validation['image_ifu']->getClientOriginalExtension();
            $image_ifu = $validation['first_name'].'_'.$validation['last_name'].'_'. $validation['phone_1'].'.'.$extension;
            $request->image_ifu->move(public_path('utilisateurs/images/image_ifu'), $image_ifu);
           
            #Image Facture

            $extension = $validation['image_facture']->getClientOriginalExtension();
            $image_facture = $validation['first_name'].'_'.$validation['last_name'].'_'. $validation['phone_1'].'.'.$extension;
            $request->image_facture->move(public_path('utilisateurs/images/image_facture'), $image_facture);
           
            $tab_profile = array(
                'first_name'         =>  $validation['first_name'],
                'last_name'          =>  $validation['last_name'],
                'email'              =>  $validation['email'],
                'sexe'               =>  $validation['sexe'],
                'phone_1'            =>  $validation['phone_1'],
                'phone_2'            =>  $validation['phone_2'],
                'adresse'            =>  $validation['adresse'],
                'image_photo'        =>  $image_photo,
                'image_carte_id'     =>  $image_carte_id,
                'image_ifu'          =>  $image_ifu,
                'image_facture'      =>  $image_facture,
                'numero_ifu'         =>  $validation['numero_ifu'],
            );

        }else{

            $tab_user = array(
                'first_name'            =>  $validation['first_name'],
                'last_name'             =>  $validation['last_name'],
                'email'                 =>  $validation['email'],
                'type_de_compte'        =>  $validation['type_de_compte'],
                //'statut_de_compte'      =>  $validation['statut_de_compte'],
                'is_admin'              =>  $validation['is_admin'],
                'code_de_parrainage'    =>  $validation['code_de_parrainage'],
                'lien_de_parrainage'    =>  $validation['lien_de_parrainage'],
                //'gains_de_parrainage'   =>  $validation['gains_de_parrainage'],
                'password'              =>  Hash::make($validation['password']),
                'role_id'               =>  $validation['role_id'],
            );

            #Image Photo
            $image_photo = $request->file('image_photo')  == null ? ""  : $request->file('image_photo');
  
            #Image Carte D'identité
            $image_carte_id = $request->file('image_carte_id')  == null ? "" : $request->file('image_carte_id');
  
            #Image Ifu
            $image_ifu = $request->file('image_ifu')  == null ? "" : $request->file('image_ifu');

            #Image Facture
            $image_facture = $request->file('image_facture')  == null ? "" : $request->file('image_facture');

            $tab_profile = array(
                'first_name'         =>  $validation['first_name'],
                'last_name'          =>  $validation['last_name'],
                'email'              =>  $validation['email'],
                'sexe'               =>  $validation['sexe'],
                'phone_1'            =>  $validation['phone_1'],
                'phone_2'            =>  $validation['phone_2'],
                'adresse'            =>  $validation['adresse'],
                'image_photo'        =>  $image_photo,
                'image_carte_id'     =>  $image_carte_id,
                'image_ifu'          =>  $image_ifu,
                'image_facture'      =>  $image_facture,
                'numero_ifu'         =>  $validation['numero_ifu'],
            );

        }

        $user = User::create($tab_user);
        //dd($user->id);
        $profile = $user->profile()->create($tab_profile);
        Alert::success('Insection', 'Utilisateur créé(e) avec succès.');
        return to_route('user.admin.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);
        return view('superadmin.users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::all();
        return view('superadmin.users.edit',compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       // dd($request->all());
        $user_id = User::find($id);
        $user_profile_id = User::find($id);
        $validation = $request->validate([
            "first_name"             => "required",
            "last_name"              => "required",
            "email"                  => "required",
            "sexe"                   => "required",
            "phone_1"                => "required",
            "phone_2"                => "required",
            "adresse"                => "required",
            "type_de_compte"         => "required",
            //"statut_de_compte"       => "required",
            "is_admin"               => "required",
            "code_de_parrainage"     => "nullable",
            "lien_de_parrainage"     => "nullable",
            "image_photo"            => "nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048",
            "image_carte_id"         => "nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048",
            "image_ifu"              => "nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048",
            "image_facture"          => "nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048",
            "numero_ifu"             => "required",
            "role_id"                => "required",
            "password"               => "required",
            //"gains_de_parrainage"    => "nullable",
        ]);

        //dd($request->all(), $validation);

        
        if(($request->file('image_photo')) && ($request->file('image_carte_id')) && ($request->file('image_ifu')) && ($request->file('image_facture'))){
            
            $tab_user = array(
                'first_name'            =>  $validation['first_name'],
                'last_name'             =>  $validation['last_name'],
                'email'                 =>  $validation['email'],
                'type_de_compte'        =>  $validation['type_de_compte'],
                //'statut_de_compte'      =>  $validation['statut_de_compte'],
                'is_admin'              =>  $validation['is_admin'],
                'code_de_parrainage'    =>  $validation['code_de_parrainage'],
                'lien_de_parrainage'    =>  $validation['lien_de_parrainage'],
                //'gains_de_parrainage'   =>  $validation['gains_de_parrainage'],
                'password'              =>  Hash::make($validation['password']),
                'role_id'               =>  $validation['role_id'],
            );
           
            #Image Photo
            
            $extension = $validation['image_photo']->getClientOriginalExtension();
            $image_photo = $validation['first_name'].'_'.$validation['last_name'].'_'. $validation['phone_1'].'.'.$extension;
            $request->image_photo->move(public_path('utilisateurs/images/image_profile'), $image_photo);
            
            #Image Carte D'identité

            $extension = $validation['image_carte_id']->getClientOriginalExtension();
            $image_carte_id = $validation['first_name'].'_'.$validation['last_name'].'_'. $validation['phone_1'].'.'.$extension;
            $request->image_carte_id->move(public_path('utilisateurs/images/image_carte_identite'), $image_carte_id);
           
            #Image Ifu

            $extension = $validation['image_ifu']->getClientOriginalExtension();
            $image_ifu = $validation['first_name'].'_'.$validation['last_name'].'_'. $validation['phone_1'].'.'.$extension;
            $request->image_ifu->move(public_path('utilisateurs/images/image_ifu'), $image_ifu);
           
            #Image Facture

            $extension = $validation['image_facture']->getClientOriginalExtension();
            $image_facture = $validation['first_name'].'_'.$validation['last_name'].'_'. $validation['phone_1'].'.'.$extension;
            $request->image_facture->move(public_path('utilisateurs/images/image_facture'), $image_facture);
           
            $tab_profile = array(
                'first_name'         =>  $validation['first_name'],
                'last_name'          =>  $validation['last_name'],
                'email'              =>  $validation['email'],
                'sexe'               =>  $validation['sexe'],
                'phone_1'            =>  $validation['phone_1'],
                'phone_2'            =>  $validation['phone_2'],
                'adresse'            =>  $validation['adresse'],
                'image_photo'        =>  $image_photo,
                'image_carte_id'     =>  $image_carte_id,
                'image_ifu'          =>  $image_ifu,
                'image_facture'      =>  $image_facture,
                'numero_ifu'         =>  $validation['numero_ifu'],
            );

        }else{

            $tab_user = array(
                'first_name'            =>  $validation['first_name'],
                'last_name'             =>  $validation['last_name'],
                'email'                 =>  $validation['email'],
                'type_de_compte'        =>  $validation['type_de_compte'],
                //'statut_de_compte'      =>  $validation['statut_de_compte'],
                'is_admin'              =>  $validation['is_admin'],
                'code_de_parrainage'    =>  $validation['code_de_parrainage'],
                'lien_de_parrainage'    =>  $validation['lien_de_parrainage'],
                //'gains_de_parrainage'   =>  $validation['gains_de_parrainage'],
                'password'              =>  Hash::make($validation['password']),
                'role_id'               =>  $validation['role_id'],
            );

            #Image Photo
            $image_photo = $request->file('image_photo')  == null ? $user_profile_id->image_photo  : $request->file('image_photo');
  
            #Image Carte D'identité
            $image_carte_id = $request->file('image_carte_id')  == null ? $user_profile_id->image_carte_id : $request->file('image_carte_id');
  
            #Image Ifu
            $image_ifu = $request->file('image_ifu')  == null ? $user_profile_id->image_ifu : $request->file('image_ifu');

            #Image Facture
            $image_facture = $request->file('image_facture')  == null ? $user_profile_id->image_facture : $request->file('image_facture');

            $tab_profile = array(
                'first_name'         =>  $validation['first_name'],
                'last_name'          =>  $validation['last_name'],
                'email'              =>  $validation['email'],
                'sexe'               =>  $validation['sexe'],
                'phone_1'            =>  $validation['phone_1'],
                'phone_2'            =>  $validation['phone_2'],
                'adresse'            =>  $validation['adresse'],
                'image_photo'        =>  $image_photo,
                'image_carte_id'     =>  $image_carte_id,
                'image_ifu'          =>  $image_ifu,
                'image_facture'      =>  $image_facture,
                'numero_ifu'         =>  $validation['numero_ifu'],
            );

        }

        $profile= Profile::whereId($id)->update($tab_profile);
        $user = User::whereId($id)->update($tab_user);
        Alert::success('Modification', 'Utilisateur modifié(e) avec succès.');

        return to_route('user.admin.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::find($id)->delete();
        Alert::success('Suppression', 'Utilisateur supprimé(e) avec succès.');
        return to_route('user.admin.index');
    }
}
