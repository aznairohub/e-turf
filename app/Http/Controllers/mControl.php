<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mregister;
use App\Models\turf;
use App\Models\message;
use App\Models\book;
use App\Models\bill;

class mControl extends Controller
{
    public function __construct()
    {
        $this->obj=new mregister;
        $this->obj1=new book;
        $this->obj2=new bill;
    }
    public function index()
    {
        return view('manager.mhome');
    }
    public function mreg()
    {
        return view('manager.mreg');
    }
    public function imreg(Request $req)
    {
        $name=$req->input('mname');
        $uname=$req->input('uname');
        $phone=$req->input('phone');
        $city=$req->input('city');
        $email=$req->input('email');
        $password=$req->input('password');
        $data=[
            'mname'=>$name,
            'uname'=>$uname,
            'phone'=>$phone,
            'city'=>$city,
            'email'=>$email,
            'password'=>$password,
            'status'=>'Waiting'
        ];
        $this->obj->insert('mregisters',$data);
        return redirect('/mreg');   
    }
    public function login()
    {
        return view('manager.mlogin');
    }
    public function log(Request $rst)
    {
        $uname=$rst->input('uname');
        $email=$rst->input('email');
        $password=$rst->input('password');
        $data=$this->obj->logaction('mregisters',$uname,$email,$password);
        // if(isset($data))
        // {
        //     $rst->session()->put(array('sess'=>$data->id));
        //     return redirect('/mhome');
        // }
        // else
        // {
        //     return redirect('/mlogin')->with('error','Invalid Details');
        // }
        if(isset($data))
        {
            if($data->status=='Approved')
            {
                $rst->session()->put(array('sess'=>$data->id));
                return redirect('/mhome');
            }
            else
            {
                return redirect('/mlogin')->with('error','Invalid Details');;
            }
        }
    }
    public function viewturf()
    {
        $id=session('sess');
        $data['result']=turf::where('id',$id)->get();
        return view('manager.viewturf',$data);
    }
    public function vfeed()
    {
        $data['result']=message::get();
        return view('manager.vfeed',$data);
    }
    public function vbook()
    {
        $id=session('sess');
        // $data['result']=book::where('id',$id)->get();
        $data['result']=book::join('turfs','turfs.place','=','books.place')
        ->join('mregisters','mregisters.id','=','turfs.manager')
        ->where('mregisters.id',$id)
        ->select('books.id','books.userid','books.tname','books.ttype','books.price','books.place','books.date','books.time','books.status',)
        ->get();
        return view('manager.viewbk',$data);
    }
    public function bill($id)
    {
        // $uid=session('sess');
        $data['res']=book::join('uregisters','uregisters.id','=','books.userid')
        ->where('books.id',$id)
        // ->where('uregisters.id',$uid)
        ->select('books.id','books.tname','books.ttype','books.place','books.date','books.time','books.price','uregisters.name')
        ->get();
        return view('manager.bill',$data);
    }
    public function vbill(Request $val,$id)
    {
        $name=$val->input('name');
        $tname=$val->input('tname');
        $ttype=$val->input('ttype');
        $place=$val->input('place');
        $date=$val->input('date');
        $time=$val->input('time');
        $price=$val->input('price');
        $status=$val->input('status');
        $data=[
            'name'=>$name,
            'tname'=>$tname,
            'ttype'=>$ttype,
            'place'=>$place,
            'date'=>$date,
            'time'=>$time,
            'price'=>$price,
            'status'=>$status
        ];
        $this->obj2->insert('bills',$data);
        return redirect('/viewbk');  
    }
    public function mpro()
    {
        $id=session('sess');
        $data['result']=mregister::where('id',$id)->get();
        return view('manager.mprofile',$data);
    }
    public function mprofile(Request $req,$id)
    {
        $name=$req->input('mname');
        $uname=$req->input('uname');
        $phone=$req->input('phone');
        $city=$req->input('city');
        $email=$req->input('email');
        $password=$req->input('password');
        $data=[
            'mname'=>$name,
            'uname'=>$uname,
            'phone'=>$phone,
            'city'=>$city,
            'email'=>$email,
            'password'=>$password
        ];
        $value=mregister::where('id',$id)->update($data);
        return redirect('/mprofile');
    } 
}
