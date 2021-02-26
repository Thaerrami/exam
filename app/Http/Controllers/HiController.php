<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HiController extends Controller
{
    public function index(Request $req) {
        $resi=0;
        foreach($req->input("qestions") as $req){
        $ans=$req['options'][intval($req['check'])];
        echo $ans.'<br>';
        }
        // dd($req->input("qestions"));
        // $ans=$req->input("qestions")[0]['options'];
        // // [intval($req->input("qestions")[0]['check'])]
        // dd($ans[intval($req->input("qestions")[0]['check'])]);
    }
}
