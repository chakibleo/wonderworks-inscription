<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if(isset(Auth::user()->email))
     <div class="alert alert-danger sucsess-block">


    
    <h1>
        your information
      </h1>

      <a href="/download" name = "download" value ="download">telecharger</a>
    @foreach($students as $student)

    <h1>
        student
    </h1>
    <label>your name:</label>
    {{$student->nom}}
    <br>
    <label>your mail:</label>
    {{$student->email}}
    <br>
    <label>your phone:</label>
    {{$student->numero}}
    <br>
    <label>your course</label>
    {{$student->formation_a}}
    <br>
    @endforeach

        
    <br>
      <a href="{{ url('/logout') }}">logout</a>
      </div>
    @else
      <h1>Not logged in</h1>
      <h1>try to logged in as admin</h1>
    @endif
    

</body>
</html>