<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pratos extends Model
{
    protected $table = 'pratos';
    protected $primaryKey = 'pratos_id';

    protected $fillable =[
        'pratos_name',
        'pratos_detail',
        'pratos_image',
        'pratos_status',
        
        
    ];

    use HasFactory;
}
