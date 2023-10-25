<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    protected $fillable = [
        'name',
        'cid',
        'DOB',
        'gender',
        'contact',
        'email',
        'dzongkhag',
        'gewog',
        'village',
        'present_address',
        'passport_photo',
        'coverletter',
        'cidcopy',
        'cv',
        'mc',
        // Add other fields as needed
    ];
}