<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cloth extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'category', 'is_new', 'is_worn_out', 'purchased_at', 'worn_out_at'];
}
