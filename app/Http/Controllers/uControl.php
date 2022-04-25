<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\uregister;
use App\Models\contact;
use App\Models\turf;
use App\Models\book;
use App\Models\message;
use App\Models\about;
use App\Models\gallery;
use App\Models\payment;
use App\Models\bill;
use App\Models\tnc;
use Mail;

class uControl extends Controller
{
    public function __construct()
    {
        $this->obj=new uregister;
        $this->obj2=new contact;
        $this->obj3=new book;
        $this->obj4=new message;
        $this->obj5=new payment;
    }
    public function index()
    {
        $data1['res']=turf::get();
        $data['result']=turf::get();
        return view('user.index',$data,$data1);
    }
    public function ureg()
    {
        return view('user.ureg');
    }
    public function login()
    {
        return view('user.ulogin');
    }
    public function userreg(Request $req)
    {
        $name=$req->input('name');
        $uname=$req->input('uname');
        $phone=$req->input('phone');
        $city=$req->input('city');
        $email=$req->input('email');
        $password=$req->input('password');
        $data=[
            'name'=>$name,
            'uname'=>$uname,
            'phone'=>$phone,
            'city'=>$city,
            'email'=>$email,
            'password'=>$password
        ];
        $this->obj->insert('uregisters',$data);
        
        $mail=['name'=>$name,
        'msg'=>'Welcome to Book My Turf.
        You have succesfully registered with Book My Turf.'];
        $user['to']=$email;
        Mail::send('mail',$mail,function($message) use($user){
            $message->to($user['to']);
            $message->subject('Email Sending');
        });
        return redirect('/');   
    }
    public function ulog(Request $rqst)
    {
        $uname=$rqst->input('uname');
        $password=$rqst->input('password');
        $data=$this->obj->logData('uregisters',$uname,$password);
        if(isset($data))
        {
            $rqst->session()->put(array('sess'=>$data->id));
            return redirect('/uhome');
        }
        else
        {
            return redirect('/ulogin')->with('error','Invalid Details');
        }
    }
    public function uhome()
    {
        $id=session('sess');
        $data['result']=$this->obj->uview('uregisters',$id);
        return view('user.uhome',$data);
    }
    public function contact()
    {
        $data['res']=about::get();
        $data['result']=tnc::get();
        $data['re']=contact::get();
        return view('user.contactus',$data);
    }
    public function viewt()
    {
        $data['result']=turf::get();
        return view('user.viewt',$data);
    }
    public function book($id)
    {
        $data['result']=turf::where('id',$id)->get();
        return view('user.book',$data);
    }
    public function insbook(Request $rt)
    {
        $id=session('sess');
        $tname=$rt->input('tname');
        $ttype=$rt->input('type');
        $price=$rt->input('price');
        $place=$rt->input('place');
        $date=$rt->input('date');
        $time=$rt->input('time');
        $data=[
            'userid'=>$id,
            'tname'=>$tname,
            'ttype'=>$ttype,
            'price'=>$price,
            'place'=>$place,
            'date'=>$date,
            'time'=>$time,
            'status'=>'Paid'
        ];
        $this->obj3->insert('books',$data);
        return redirect('/payment'); 
    }
    public function payment()
    {
        return view('user.payment');
    }
    public function inspay(Request $rq)
    {
        $id=session('sess');
        $cnumber=$rq->input('cnumber');
        $name=$rq->input('name');
        $amount=$rq->input('amount');
        $expdate=$rq->input('expdate');
        $cvv=$rq->input('cvv');
        $data=[
            'uid'=>$id,
            'cnumber'=>$cnumber,
            'name'=>$name,
            'amount'=>$amount,
            'expdate'=>$expdate,
            'cvv'=>$cvv,
            'status'=>'Paid'
        ];
        $this->obj5->ins('payments',$data);
        return redirect('/uhome');
    }
    public function msg()
    {
        
        return view('user.msg');
    }
    public function insfeed(Request $rt)
    {
        $name=$rt->input('name');
        $email=$rt->input('email');
        $subject=$rt->input('subject');
        $message=$rt->input('message');
        $data=[
            'name'=>$name,
            'email'=>$email,
            'subject'=>$subject,
            'message'=>$message
        ];
        $this->obj4->insert('messages',$data);
        return redirect('/uhome'); 
    }
    public function about()
    {
        $data['result']=about::get();
        return view('user.about-us',$data);
    }
    public function gallery()
    {
        $data['result']=gallery::get();
        return view('user.gallery',$data);
    }
    public function viewbill($id)
    {
        $uid=session('sess');
        $data['result']=bill::join('uregisters','uregisters.name','=','bills.name')
        ->where('uregisters.id',$uid)
        ->where('bills.id',$id)
        ->select('bills.name','bills.tname','bills.ttype','bills.place','bills.date','bills.time','bills.price','bills.status')
        ->get();
        return view('user.vbill',$data);
    } 
    public function vr()
    {
        $id=session('sess');
        $name=uregister::where('id',$id)->value('name');
        $data['result']=bill::where('name',$name)->get();
        return view('user.vreceipt',$data);
    }
    public function turfs()
    {
        $data['res']=turf::get();
        return view('user.turfs',$data);
    }
    public function upprofile()
    {
        $id=session('sess');
        $data['result']=uregister::where('id',$id)->get();
        return view('user.updateprofile',$data);
    }
    public function edpro($id)
    {
        $data['result']=uregister::where('id',$id)->get();
        return view('user.updpro',$data);
    }
    public function updtprofile(Request $req,$id)
    {
        $name=$req->input('name');
        $uname=$req->input('uname');
        $phone=$req->input('phone');
        $city=$req->input('city');
        $email=$req->input('email');
        $password=$req->input('password');
        $data=[
            'name'=>$name,
            'uname'=>$uname,
            'phone'=>$phone,
            'city'=>$city,
            'email'=>$email,
            'password'=>$password
        ];
        $value=uregister::where('id',$id)->update($data);
        return redirect('/updateprofile');
    }
}
