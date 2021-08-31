<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegistrationMuslimMatrimony extends Model
{
    protected $fillable = ['lookingfor', 'permission', 'preferencecountry','name', 'education', 'parents_info', 'siblings_info', 'home_district', 'regforwho','bg_name', 'bg_lastname', 'street_address', 'phonenumber','citizenship','maritalstatus', 'email','image','membership','termscondition'];
}
