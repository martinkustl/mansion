<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaticFile extends Model
{
    use HasFactory;

    /**
     * @var bool
     * 
     */
    public $timestamps = false;
    protected $table = 'static_file';
}
