<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class test2 extends Model
{
    use HasFactory;
    protected $table = 'tests';
    
    protected $fillable = [
        'user_id',
        'sektor_id',
        'ext2_id',
        'pyd',
        'ic',
        'tahun',
        'jawatan',
        'gred',
        'pp1',
        'pp2',
        'sasaran',
        'bidang_tugas',
        'penilaian_1',
        'total_all',
        'status_sasaran',
        'pencapaian_1',
        'pencapaian_2',
        'bil',
        'bil2',
        'jumlah_input',
        'penilaian_2',
        'catatan',
        'jumlah_input2',
        'total_all2',
        'purata',
        'skor',
        'purata2',
        'skor2',
        'pp1_semak',
        'pp2_semak',
        'penyemak1',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'sektor');
    }

    public function test2(){
        return $this->belongsToMany(Test::class, 'id', 'ext2_id', 'sektor', 'user_id');
    }

    
}
