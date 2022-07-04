<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class task extends Model
{
   protected $table = 'tasks';
   protected $primaryKey = 'id';

   use SoftDeletes;
}
