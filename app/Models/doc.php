<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doc extends Model
{
    use HasFactory;
    protected $table = "tbl_dokumen";
    protected $primaryKey = 'id_dokumen';
    protected $guarded = [];
}
