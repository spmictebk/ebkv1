<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;
    protected $table = 'tests';
    
    protected $fillable = [
        'user_id',
        'sektor_id',
        'unit_id',
        'ext1_id',
        'ext2_id',
        'pyd',
        'ic',
        'tahun',
        'jawatan',
        'gred',
        'pp1',
        'pp2',
        'pp_1_nama',
        'pp_2_nama',
        'pp1_nama',
        'pp2_nama',
        'kpp_nama',
        'sasaran',
        'sasaran1',
        'bidang_tugas',
        'bidang_tugas1',
        'penilaian_1',
        'total_all',
        'status_sasaran',
        'status_sasaran1',
        'bil',
        'bil2',
        'pencapaian_1',
        'pencapaian_2',
        'jumlah_input',
        'penilaian_2',
        'catatan',
        'jumlah_input2',
        'total_all2',
        'purata',
        'skor',
        'tahap1',
        'tahap2',
        'purata2',
        'skor2',
        'pp1_semak',
        'pp2_semak',
        'kpp_semak',
        'penyemak1',
        'penyemak2',
        'penyemak3',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'id', 'user_id');
    }

    public function parent()
    {
        return $this->hasOne(Self::class, 'id', 'ext2_id');
    }

    public function children()
    {
        return $this->hasMany(Self::class, 'ext2_id', 'id');
    }

}
