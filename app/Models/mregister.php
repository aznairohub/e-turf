<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class mregister extends Model
{
    use HasFactory;
    public function insert($table,$data)
    {
      DB::table($table)->insert($data); 
    } 
    public function logaction($table,$uname,$email,$password)
    {
        return DB::table($table)->where('uname',$uname)->where('email',$email)->where('password',$password)->first();
    }
    public function select($table)
    {
      return DB::table($table)->get();
    }
    public function status($table,$data,$id)
    {
       return DB::table($table)->where('id',$id)->update($data);
    }
}
