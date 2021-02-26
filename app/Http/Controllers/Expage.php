<?php

namespace App\Http\Controllers;

use App\Exam;
use Illuminate\Http\Request;

class Expage extends Controller
{
    
    public function index($id){
        $exam= Exam::where('exam_code',$id)->with(['question'])->first();
        $ex =$exam->toArray();
        // dd($ex);
        // echo $ex["exam_name"].'<br>';
        // echo $ex["exam_date"].'<br>';
        // echo $ex["exam_code"].'<br>';

        //     echo'<pre>';
        // foreach($ex["question"] as $d){
        //     echo $d["title"].'<br>';
        //     $options=explode(',',$d["options"]);
        //     foreach($options as $key=>$ops){
        //     if($key==$d['answer_option']){
        //         echo 'ops  '.$ops.'<input type="radio" checked><br>';
        //     }else{
        //         echo 'ops  '.$ops.'<input type="radio"><br>';
        //     }
        //     }
            
        // }
        // echo'</pre>';


        // dd($exam->get(''));
    //         $users->exam()->create([
    //             'exam_name'=>request()->input('exam-name'),
    //             'exam_date'=>request()->input('date'),
    //             'start_at'=>request()->input('startat'),
    //             'end_at'=>request()->input('endat'),
    //             'exam_code'=>request()->input('codelink')
    //  ]);

    
    return view('Exam',['questions'=>$ex["question"],'ex_name'=>$ex["exam_name"],
    'ex_date'=>$ex["exam_date"],'ex_code'=> $ex["exam_code"],'start_at'=>$ex["start_at"]
    ,'end_at'=>$ex["end_at"],
    ]);
    
    }

}

//"start_at"
