<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\control;
use App\Http\Controllers\uControl;
use App\Http\Controllers\mControl;


// uControl
Route::get('/',[uControl::class,'index']);
Route::get('/ureg',[uControl::class,'ureg']);
Route::post('/userreg',[uControl::class,'userreg']);
Route::get('/ulogin',[uControl::class,'login']);
Route::post('/ulog',[uControl::class,'ulog']);
Route::get('/uhome',[uControl::class,'uhome']);
Route::get('/contactus',[uControl::class,'contact']);
Route::get('/viewt',[uControl::class,'viewt']);
Route::get('/book/{id}',[uControl::class,'book']);
Route::post('/bk',[uControl::class,'insbook']);
Route::get('/payment',[uControl::class,'payment']);
Route::post('/pay',[uControl::class,'inspay']);
Route::get('/msg',[uControl::class,'msg']);
Route::post('/snd',[uControl::class,'insfeed']);
Route::get('/about-us',[uControl::class,'about']);
Route::get('/gallery',[uControl::class,'gallery']);
Route::get('/vreceipt',[uControl::class,'vr']);
Route::get('/vbill/{id}',[uControl::class,'viewbill']);
Route::get('/turfs',[uControl::class,'turfs']);
Route::get('/updateprofile',[uControl::class,'upprofile']);
Route::get('/editprofile/{id}',[uControl::class,'edpro']);
Route::post('/edt/{id}',[uControl::class,'updtprofile']);


// control(admin)
Route::get('/adhome',[control::class,'index']);
Route::get('/adlogin',[control::class,'login']);
Route::post('/log',[control::class,'log']);
Route::get('/addabout',[control::class,'addabout']);
Route::post('/addab',[control::class,'insabt']);
Route::get('/upabt',[control::class,'edit']);
Route::post('/up',[control::class,'updts']);
Route::get('/addturf',[control::class,'addt']);
Route::post('/addt',[control::class,'insturf']);
Route::get('/tnc',[control::class,'addtnc']);
Route::post('/addtc',[control::class,'instc']);
Route::get('/addcd',[control::class,'addcd']);
Route::post('/addc',[control::class,'inscd']);
Route::get('/vturf',[control::class,'vturf']);
Route::get('/adview',[control::class,'adview']);
Route::get('/approve/{id}',[control::class,'approve']);
Route::get('/decline/{id}',[control::class,'decline']);
Route::get('/addgallery',[control::class,'addgallery']);
Route::post('/addg',[control::class,'addg']);
Route::get('/editgallery',[control::class,'ed']);
Route::get('/vupdimg/{id}',[control::class,'upd']);
Route::post('/up/{id}',[control::class,'up']);
Route::get('/viewfeed',[control::class,'viewfeed']);
Route::get('/vbookings',[control::class,'vbook']);
Route::get('/profile',[control::class,'profile']);
Route::get('/logout',[control::class,'logout']);
Route::post('/adprofile',[control::class,'updt']);
Route::get('/upturf',[control::class,'edt']);
Route::get('/upsturf/{id}',[control::class,'updturfs']);
Route::post('/uptf/{id}',[control::class,'uptrf']);

// mcontrol
Route::get('/mreg',[mControl::class,'mreg']);
Route::post('/imreg',[mControl::class,'imreg']);
Route::get('/mlogin',[mControl::class,'login']);
Route::post('/logi',[mcontrol::class,'log']);
Route::get('/mhome',[mControl::class,'index']);
Route::get('/viewturf',[mControl::class,'viewturf']);
Route::get('/vfeed',[mControl::class,'vfeed']);
Route::get('/viewbk',[mControl::class,'vbook']);
Route::get('/bill/{id}',[mControl::class,'bill']);
Route::post('/gbill/{id}',[mControl::class,'vbill']);
Route::get('/mprofile',[mControl::class,'mpro']);
Route::post('/mpr/{id}',[mControl::class,'mprofile']);