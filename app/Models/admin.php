<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class admin extends Model
{
    use HasFactory;
    public function logData($table,$email,$password)
    {
        return DB::table($table)->where('email',$email)->where('password',$password)->first();
    }
    public function insert($table,$data)
    {
      DB::table($table)->insert($data); 
    } 
    public function updates($table,$data)
    {
      return DB::table($table)->update($data);
    } 
    
}
