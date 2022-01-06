<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class motoboy extends Model
{
    protected $table = 'motoboy';

    protected $primaryKey = 'motoboy_id';

    protected $fillable = [
        'motoboy_name','motoboy_phone_number','motoboy_password','motoboy_status','added_on'
    ];

    use HasFactory;
}
