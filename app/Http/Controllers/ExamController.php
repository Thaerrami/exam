<?php

namespace App\Http\Controllers;

use App\Exam;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Ui\Presets\React;

class ExamController extends Controller
{
    public function index(Request $request)
    {
        // $products = Exam::latest()->paginate(5);
  
        // return view('products.index',compact('products'))
        //     ->with('i', (request()->input('page', 1) - 1) * 5);
        // dd($request->input());
           
            

    // echo'<pre>';
    // foreach($request->input("qestions") as $ques){
    //     echo $ques['name'].'<br>';
    //     echo implode(',',$ques["options"]).'<br>';
    //     echo $ques["check"].'<br>';
    // }
    // echo'</pre>';
    
}
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'exam-name' => 'required',
            'date' => 'required',
            'startat' => 'required',
            'endat' => 'required',
            'codelink' => 'required',
        ]);

        /*..............................  exam   .......................*/
        $exn=$request->input("exam-name");
        $date=$request->input("date");
        $stat=$request->input("startat");
        $endat=$request->input("endat");
        $cdlk=$request->input("codelink");
        /*..............................   questions  .......................*/
        $ques=$request->input("qestions");
        

        // Exam::create($request->all());
   
        // return redirect()->route('products.index')
        //                 ->with('success','Product created successfully.');
        // dd($request);
    
        $users = User::where('id',Auth::id())->with(['exam','exam.question'])->first();
        $users->exam()->create([
            'exam_name'=>request()->input('exam-name'),
            'exam_date'=>request()->input('date'),
            'start_at'=>request()->input('startat'),
            'end_at'=>request()->input('endat'),
            'exam_code'=>request()->input('codelink')
 ])->save();

 foreach($request->input("qestions") as $ques){
    $users->exam()->where('exam_code',request()->input('codelink'))->first()->question()->create([
        'title'=>$ques['name'],
        'answer_option'=>$ques["check"],
        'options'=>implode(',',$ques["options"])  
        ])->save();
}
    return redirect('home');
    }
   
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Exam $Exam)
    {
        dd($Exam);
        // return view('products.show',compact('product'));
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Exam $Exam)
    {
        return view('products.edit',compact('product'));
    }
  
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Exam $Exam)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
  
        $Exam->update($request->all());
  
        return redirect()->route('products.index')
                        ->with('success','Product updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exam $Exam)
    {
        $Exam->delete();
  
        return redirect()->route('products.index')
                        ->with('success','Product deleted successfully');
    }

}
