<?php

namespace App\Http\Controllers\transaction;
use App\Models\Money;
use App\Models\Payment;
use App\Models\Transfer;
use App\Models\User;
use App\Models\WithDraws;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class api extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function tarik(Request $request,$id){
        $tarik = WithDraws::where('name',user::Auth()->name)->find($id)->get();


        if($tarik){
            return response()->json([
                'data' => $tarik,
                'message' => 'berhasil'
            ],200);
        }
    }   
    public function cek(Request $request,$id){
        $cek = Money::where('name',user::Auth()->name)->find($id)->get();


        if($cek){
            return response()->json([
                'data' => $cek,
                'message' => 'berhasil'
            ],200);
        }
    }  
    public function payment(Request $request,$id){
        $payment = Payment::where('name',user::Auth()->name)->find($id)->get();


        if($payment){
            return response()->json([
                'data' => $payment,
                'message' => 'berhasil'
            ],200);
        }
    } 
    public function transfer(Request $request,$id){
        $transfer = Transfer::where('name',user::Auth()->name)->find($id)->get();


        if($transfer){
            return response()->json([
                'data' => $transfer,
                'message' => 'berhasil'
            ],200);
        }
    }  
}
