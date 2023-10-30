<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'first_name'           => "NASSARA",
            'last_name'            => "Kévine",
            'email'                => "vinenassara@gmail.com",
            'type_de_compte'       => "mini",
            'statut_de_compte'     => "non verifier",
            'is_admin'             => 1,
            'code_de_parrainage'   => "",
            'lien_de_parrainage'   => "",
            'gains_de_parrainage'  => "",
            'password'             => bcrypt("vinenassara@gmail.com"),
            'role_id'              => 1,
        ]);
        $user = User::where('id', 1)->first();   
        $user->profile()->create([
            'first_name'      => "NASSARA",
            'last_name'       => "Kévine",
            'email'           => "vinenassara@gmail.com",
            'sexe'            => "Masculin",
            'phone_1'         => "229 58343579",
            'phone_2'         => "",
            'adresse'         => "",
            'image_photo'     => "",
            'image_carte_id'  => "",
            'image_ifu'       => "",
            'image_facture'   => "",
            'numero_ifu'      => "12356984"
            ]); 
    }
}
