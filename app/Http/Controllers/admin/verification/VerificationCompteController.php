<?php

namespace App\Http\Controllers\admin\verification;

use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class VerificationCompteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::where('statut_de_compte', 'en cours')->get();
        //dd($users);
        return view('superadmin.verification.index', compact('users'));
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
    public function confirmer(Request $request, $id)
    {
        $user = User::find($id);
        $tab  = array(
            'type_de_compte' => 'standard',
            'statut_de_compte' => 'verifier',
        );
        $mailconfirm = [
            'title' => 'Vérification de compte',
            'first_name_of_users' => $user->first_name,
            'last_name_of_users'  => $user->last_name,
            'email_of_users'  => $user->email,
        ];
        
        $users = User::where('id', $id)->update($tab);

        Mail::to($user->email)->send(new \App\Mail\users\confirmation\ConfirmationMail($mailconfirm));
        //dd("Email is sent successfully.");
        Alert::success('Confirmation de compte !','Compte confirmé avec succès.'); 
        return to_route('verificationcompte.users.index');
        //dd($id, $user);
    }

    public function rejete(Request $request, $id)
    {
        $user = User::find($id);
        $validation = $request->validate([
            'motif' => 'required'
        ]);
        //dd($id, $user, $request->input('motif'));
        $tab  = array(
            'type_de_compte' => 'mini',
            'statut_de_compte' => 'rejecter',
            'motif' => $validation['motif'],
        );

        $mailrejet = [
            'title' => 'Rejet de compte',
            'first_name_of_users' => $user->first_name,
            'last_name_of_users'  => $user->last_name,
            'email_of_users'  => $user->email,
            'motif'  => $tab['motif'],
        ];
        $users = User::where('id', $id)->update($tab);

        Mail::to($user->email)->send(new \App\Mail\users\rejet\RejetMail($mailrejet));
        Alert::success('Rejet de compte !','Compte rejecté avec succès.');  
        return to_route('verificationcompte.users.index');
    }
    public function store(Request $request)
    {
        //
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
