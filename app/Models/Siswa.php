<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'master_siswa';
    use HasFactory;
    protected $guarded = ['id'];

    public function mapel()
    {
        return $this->belongsToMany(Mapel::class)->withPivot(['nilai']);
    }
}
