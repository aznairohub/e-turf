<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class payment extends Model
{
    use HasFactory;
    public function ins($table,$data)
    {
      DB::table($table)->insert($data); 
    }
}
