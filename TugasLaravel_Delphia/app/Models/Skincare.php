<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Skincare extends Model
{
    use HasFactory;
    protected $table = 'skincare';

    protected $fillable = ['nama', 'fungsi', 'harga', 'image'];
}