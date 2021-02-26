
@include('layouts.app')

<div class="container">
    
 
    <!-- Styles -->
    <link href="{{ asset('css/enter.css') }}" rel="stylesheet">
    <!-- Scripts -->
    
    
    
        <div class="container w-100 p-0 m-0">
        <div class="row m-1">
        <div class="col-lg-10 col-md-8 col-sm-12 cont ">
        <form action="{{ route('createExam') }}" method="POST" id='form' class="form-group mb-0 pb-0 " >
            @csrf
        <div class="exn w-100 text-center text-capitalize m-auto" style='font-size:2.2rem'>exam name </div>
        <input type="text" name ='exam-name' required class="input-control w-100 m-auto" />
       <div id="questionfeald">
    
       </div>
       <br>
       <div class="buttons">
            <span class="btn btn-primary m-0" id='addbutton'style='font-size:1.8rem' >Add</span>
             
       </div>
       
       date    <input type="date" name="date"    required class="form-control datedata" />
       start at<input type="time" name="startat" required class="form-control datedata" />
       end at  <input type="time" name="endat"   required class="form-control datedata" />
    
       <br><br>
       <div class="toast position-absolute" id='toast'>
        <div class="toast-body">
          text copied
        </div>
      </div> 
       copy exam link 
       <input type="text" class="w-100"  id="codelink"  />
       <input type="hidden" class="w-100" name="codelink" id ='realcode' />
       
      <div class="d-flex w-100 justify-content-between">
       <p id='copylink' class="btn btn-success" style='font-size:1.8rem' >copy link</p>
       <input type="submit" name="sim" class="btn btn-primary m-0 " style='font-size:1.5rem' />
      </div>
      
      <br>
        
    </form>
    
      
    
    </div>
    
       </div>
       </div>
       <script src="{{ asset('js/enter.js')}}" type="text/javascript"></script>
    
