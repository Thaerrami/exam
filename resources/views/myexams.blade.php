<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
    html{
      width :100%
    }
    body{
      width: 100%;
      overflow-x: hidden;
    }

    </style>
    <title>Document</title>
</head>
<body>
  <div class="">
    @include('layouts.app')
  </div>
  <table class="table w-100">
    <thead class="thead-light">
      <tr>
        <th scope="col">exam name</th>
        <th scope="col">exam link</th>
        <th scope="col">started at</th>
        <th scope="col">date of creation</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($data as $peace)
        
        <tr>
          <td>{{$peace['exam_name']}}</td>
          <td><a href="http://localhost:8000/Expage/{{$peace['exam_code']}}"> http://localhost:8000/Expage/{{$peace['exam_code']}} </a></td>
          <td>{{$peace['start_at']}}</td>
          <td>{{$peace['exam_date']}}</td>
        </tr>
@endforeach
  </tbody>
</table>

</body>
</html>
