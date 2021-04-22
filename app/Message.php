<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['nama', 'email', 'telp', 'pesan'];

    protected $hidden = [];

    protected $primaryKey = 'id';
}
