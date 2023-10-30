<?php

namespace App\Http\Controllers\users\verification;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class VerificationIdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        return view('users.verification.crypto-kyc-application', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            "first_name"             => "required",
            "last_name"              => "required",
            "email"                  => "required",
            "sexe"                   => "required",
            "phone_1"                => "required",
            "phone_2"                => "required",
            "adresse"                => "required",
            "image_photo"            => "required|image|mimes:jpg,png,jpeg,gif,svg|max:2048",
            "image_carte_id"         => "required|image|mimes:jpg,png,jpeg,gif,svg|max:2048",
            "image_ifu"              => "required|image|mimes:jpg,png,jpeg,gif,svg|max:2048",
            "image_facture"          => "required|image|mimes:jpg,png,jpeg,gif,svg|max:2048",
            "numero_ifu"             => "required",
        ]);

        if(($request->file('image_photo')) && ($request->file('image_carte_id')) && ($request->file('image_ifu')) && ($request->file('image_facture'))){
                       
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
           
            $tab = array(
                //'first_name'         =>  $validation['first_name'],
                //'last_name'          =>  $validation['last_name'],
                //'email'              =>  $validation['email'],
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

            $up_statut_compte_user = array(
                'statut_de_compte' => 'en cours'
            );

        }
        $user = User::find( Auth::user()->id);
        $mailverify = [
            'title' => 'Vérification de compte',
            'first_name_of_users' => $user->first_name,
            'last_name_of_users'  => $user->last_name,
            'superadmin_name'  => 'NASSARA Kévine',
        ];
        //dd($mailverify);
        User::where('id', Auth::user()->id)->update($up_statut_compte_user);
        $user->profile()->update($tab);


        Mail::to('nassvine2@gmail.com')->send(new \App\Mail\users\verification\VerifyIdentityMail($mailverify));

        //dd("Email is sent successfully.");

        Alert::success('Tous les champs sont bien requis !','Vérification envoyée avec succès.');

        return to_route('verification.users.index')/* ->with('success', 'La marque a été créée avec succès.') */; 
        
        //dd($request->all(), $user, $validation);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
