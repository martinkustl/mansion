<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventType extends Model
{
    use HasFactory;

    /**
     * @var bool
     * 
     */
    public $timestamps = false;

    protected $table = 'event_type';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */

    protected $primaryKey = 'type';
}
