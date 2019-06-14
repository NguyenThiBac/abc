<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'Students';
    protected $filltable=[
        'sothe','hoten','ngaysinh','lop','masosach','tensach','tacgia','sotrang','ngaymuon','ngaytra'
    ];
}
