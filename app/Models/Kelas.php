<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'master_kelas';
    use HasFactory;
    protected $guarded = ['id'];
}
