<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
        label {width: 200px; display: inline-block; padding:30px; }

        input {color:#000;}

        h1 {padding:30px;}
    </style>
   @include("admin.admincss")
  </head>
  <body>
  <div class="container-scroller">
@include("admin.navbar")

<h1> Create Projects </h1><br><br>

<form action="/add" method="post">
@csrf

<label> Project ID: </label> <input type="text" name="id" size=50  ><br/><br/>
<label> Project Title: </label> <input type="text" name="title" size=50  ><br/><br/>

<label> Student Name: </label> <input type="text" name="student" size=50><br/><br/>
<label> Supervisor Name: </label> <input type="text" name="supervisor" size=50><br/><br/>
<label> Examiner 1: </label> <input type="text" name="examiner1" size=50><br/><br/>
<label> Examiner 2: </label> <input type="text" name="examiner2" size=50><br/><br/>



<br><br><button style="background-color:white; color:black; margin:50px; padding=14px 40px" type=submit value="submit" >Submit</button>
<button style="background-color:white; color:black" type=reset value="reset">Reset</button>

</form>

</div>
@include("admin.adminscript")   
  </body>
</html>

