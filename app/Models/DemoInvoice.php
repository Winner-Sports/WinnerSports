<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemoInvoice extends Model
{
    use HasFactory;

    protected $table = 'demoinvoice';

    protected $fillable = [
        'staff_name',
        'staff_id',
        'date',
        'Customer_name',
        'Address',
        'Bs_type',
        'phone',
    ];
}
