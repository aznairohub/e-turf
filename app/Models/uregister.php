<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class uregister extends Model
{
    use HasFactory;
    public function insert($table,$data)
    {
      DB::table($table)->insert($data); 
    } 
    public function logData($table,$uname,$password)
    {
        return DB::table($table)->where('uname',$uname)->where('password',$password)->first();
    }
    public function uview($table,$id)
    {
      return DB::table($table)->where('id',$id)->get();
    }
}
