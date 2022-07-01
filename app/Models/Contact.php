<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public static $rules = array(
        'fullname' => 'required',
        'gender' => 'required',
        'email' => 'required|email',
        'postcode' => 'required|max:8',
        'address' => 'required',
        'building_name' => 'required',
        'opinion' => 'required',
    );
}
