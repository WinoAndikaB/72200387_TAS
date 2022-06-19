<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Kyslik\ColumnSortable\Sortable;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa1';

    protected $fillable = [
        'nim','nama','gender','jurusan','bidang_minat'
    ];
}
