<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
        label {width: 200px; display: inline-block; }

        input {color:#000;}
    </style>
   @include("admin.admincss")
  </head>
  <body>
  <div class="container-scroller">
@include("admin.navbar")

<h1> Create Projects </h1>

<form action="/add" method="post">
@csrf

<label> Title: </label> <input type="text" name="title" size=50  ><br/><br/>
<label> Duration (Month): </label> <input type="text" name="duration" size=50><br/><br/>

<br><br><button style="background-color:white; color:black; margin:50px; padding=14px 40px" type=submit value="submit" >Submit</button>
<button style="background-color:white; color:black" type=reset value="reset">Reset</button>

</form>

</div>
@include("admin.adminscript")   
  </body>
</html>