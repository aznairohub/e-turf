<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class contact extends Model
{
    use HasFactory;
    public function insert($table,$data)
    {
      DB::table($table)->insert($data); 
    } 
}
