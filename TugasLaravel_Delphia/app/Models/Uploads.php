<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uploads extends Model
{
    protected $table ='skincare';
    protected $primaryKey = 'id';
    protected $fillable = array('image', 'created_at','updated_at');
}
