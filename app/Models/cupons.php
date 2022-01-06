<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cupons extends Model
{
    protected $table = 'cupons';

    protected $primaryKey = 'cupon_id';

    protected $fillable =[
        'cupon_code_name',
        'cupon_type',
        'cupon_value',
        'cart_min_value',
        'expired_on',
        'cupon_status',
        'added_on'
    ];

    use HasFactory;
}
