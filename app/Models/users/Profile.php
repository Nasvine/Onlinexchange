<?php

namespace App\Models\users;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Profile extends Model
{
    use HasFactory;

    protected $fillable=[
        'first_name',
        'last_name',
        'email',
        'sexe',
        'phone_1',
        'phone_2',
        'adresse',
        'image_photo',
        'image_carte_id',
        'image_ifu',
        'image_facture',
        'numero_ifu',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
