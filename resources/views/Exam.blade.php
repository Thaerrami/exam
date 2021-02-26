<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .btn{
        border:4px solid rgba(0, 0, 0, 0.15);
        font-size: larger;
        padding: 12px 20px;
        margin: 20px ;
        border-radius: 10px 
    }      
    .btn-primary{
        background: rgb(92, 104, 216);
        color:aliceblue;
        float: right;
    }


    </style>
</head>
<link href="{{ asset('/css/exam.css') }}" rel="stylesheet">
<body>
    <div class="w-100 header">
        <div class="contain">
            start at: {{$start_at}}<br><br>
            end at: {{$end_at}}
        </div>
        <div class="exname">
            <h1>{{$ex_name}}</h1>
         </div>
        <div class="contain">
            <div class="now">  <div > time now:</div><div id='timenow'></div></div><br><br>
            date: {{$ex_date}}
        </div>
    </div>


    @foreach ($questions as $key=>$qustion)
    <div class="questionsblock">
        <h2 class="qestion">{{$qustion['title']}}</h2><br>
        <div class="options">
        @foreach (explode(',',$qustion['options']) as $key2option =>$option)
            <div class="option"><input type="radio" name='q[{{$key}}]' value="{{$key2option}}">{{$option}}</div>
        @endforeach
        <input type="radio" name='q[{{$key}}]' value="7" style="display:none;opacity:0">
    </div>
        <br>
    </div>
    @endforeach
    <input type="submit" value="submit" class="btn btn-primary" />
    <script src="{{ asset('/js/exam.js') }}" >
       
    </script>

</body>
</html>