<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['code','description'];
    protected $guarded = ['id', 'create_at', 'update_at'];
    protected $table = 'produtos';
}
