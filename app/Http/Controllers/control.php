<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use App\Models\about;
use App\Models\turf;
use App\Models\contact;
use App\Models\mregister;
use App\Models\gallery;
use App\Models\message;
use App\Models\book;
use App\Models\tnc;

class control extends Controller
{
    public function __construct()
    {
        $this->obj=new admin;
        $this->obj1=new turf;
        $this->obj2=new contact;
        $this->obj3=new about;
        $this->obj4=new mregister;
        $this->obj5=new gallery;
        $this->obj6=new tnc;
    }
    public function index()
    {
        return view('admin.adhome');
    }
    public function login()
    {
        return view('admin.adlogin');
    }
    public function log(Request $rqst)
    {
        $email=$rqst->input('email');
        $password=$rqst->input('password');
        $data=$this->obj->logData('admins',$email,$password);
        if(isset($data))
        {
            $rqst->session()->put(array('sess'=>$data->id));
            return redirect('/adhome');
        }
        else
        {
            return redirect('/adlogin')->with('error','Invalid Details');
        }
    }
    // add and insert about 
    public function addabout()
    {
        return view('admin.addabout');
    }
    public function insabt(Request $req)
    {
        $about=$req->input('about');
        
        $data=[
            'about'=>$about
        ];
        $this->obj->insert('abouts',$data);
        return redirect('/addabout');
    }
    // editabout 
    public function edit()
    {
        $data['result']=$this->obj3->edit('abouts');
        return view('admin.upabt',$data);
    }
    public function updts(Request $reqt)
    {
        $about=$reqt->input('about');
        $data=[
            'about'=>$about
        ];
        $this->obj3->updates('abouts',$data);
        return redirect('/upabt');
    }
    public function addt()
    {
        $data['result']=mregister::get();
        return view('admin.addturf',$data);
    }
    public function insturf(Request $rt)
    {
        $tname=$rt->input('tname');
        $place=$rt->input('place');
        $type=$rt->input('type');
        $desc=$rt->input('desc');
        $price=$rt->input('price');
        $manager=$rt->input('manager');
        $data=[
            'tname'=>$tname,
            'place'=>$place,
            'type'=>$type,
            'desc'=>$desc,
            'price'=>$price,
            'manager'=>$manager
        ];
        $this->obj->insert('turfs',$data);
        return redirect('/adhome');
    }
    public function addtnc()
    {
        return view('admin.tnc');
    }
    public function instc(Request $r)
    {
        $tc=$r->input('tc');
        $data=[
            'tc'=>$tc
        ];
        $this->obj6->ins('tncs',$data);
        return redirect('/tnc');
    }
    public function addcd()
    {
        return view('admin.addcd');
    }
    public function inscd(Request $r)
    {
        
        $place=$r->input('place');
        $email=$r->input('email');
        $phone=$r->input('phone');
        $data=[
            'place'=>$place,
            'email'=>$email,
            'phone'=>$phone
        ];
        $this->obj2->insert('contacts',$data);
        return redirect('/addcd');
    }
    public function vturf()
    {
        $data['result']=$this->obj1->select('turfs');
        return view('admin.vturf',$data);
    }
    public function adview()
    {
        $data['result']=$this->obj4->select('mregisters');
        return view('admin.adview',$data);
    }
    public function approve($id)
    {
        $data=['status'=>"Approved"];
        $this->obj4->status('mregisters',$data,$id);
        return redirect('/adview');
    }
    public function decline($id){
        $data=['status'=>"Declined"];
        $this->obj4->status('mregisters',$data,$id);
        return redirect('/adview');
    }
    public function addgallery()
    {
        return view('admin.addgallery');
    }
    public function addg(Request $reqst)
    {
        $image=$reqst->file('image');
        $filename = $image->getClientOriginalName();
        $image->move(public_path().'/uploads/', $filename);

        $desc=$reqst->input('desc');
        $data=[
            'image'=>$filename,
            'desc' =>$desc
            ];
        $this->obj5->insert('galleries',$data);
        return redirect('/addgallery');
    }
    public function ed()
    {
        $data['result']=gallery::get();
        return view('admin.editgallery',$data);
    }
    public function upd($id)
    {
        $data['result']=gallery::where('id',$id)->get();
        return view('admin.vupdimg',$data);
    }
    public function up(Request $r,$id)
    {
        $image=$r->file('image');
        $desc=$r->input('desc');
        if($image=="")
        {
            $data=[
                'desc'=>$desc
            ];
        }
        else{
            $filename = $image->getClientOriginalName();
            $image->move(public_path().'/uploads/', $filename);
            $data=[
                'image'=>$filename,
                'desc'=>$desc
            ];
        }
        
        $this->obj5->updates('galleries',$data,$id);
        return redirect('/editgallery');
    }
    public function viewfeed()
    {
        $data['result']=message::get();
        return view('admin.viewfeed',$data);
    }
    public function vbook()
    {
        $data['result']=book::get();
        return view('admin.vbookings',$data);
    }
    public function logout(Request $req)
    {
       $req->session()->forget('sess');
       return redirect('/');
    }
    public function profile()
    {
        $data['result']=admin::get();
        return view('admin.profile',$data);
    }
    public function updt(Request $reqt)
    {
        $username=$reqt->input('username');
        $email=$reqt->input('email');
        $password=$reqt->input('password');
        $data=[
            'username'=>$username,
            'email'=>$email,
            'password'=>$password
        ];
        $this->obj->updates('admins',$data);
        return redirect('/profile');
    }
    public function edt()
    {
        $data['result']=turf::get();
        return view('admin.upturf',$data);
    }
    public function updturfs($id)
    {
        $data['result']=turf::where('id',$id)->get();
        return view('admin.updturf',$data);
    }
    public function uptrf(Request $a,$id)
    {
        $tname=$a->input('tname');
        $place=$a->input('place');
        $type=$a->input('type');
        $desc=$a->input('desc');
        $price=$a->input('price');
        $data=[
            'tname'=>$tname,
            'place'=>$place,
            'type'=>$type,
            'desc'=>$desc,
            'price'=>$price
        ];
        $value=turf::where('id',$id)->update($data);
        return redirect('/upturf');
    }
}
