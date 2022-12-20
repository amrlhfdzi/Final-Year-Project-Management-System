<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
   @include("admin.admincss")
  </head>
  <body>
  <div class="container-scroller">
@include("admin.navbar")

<div style="position: relative; top: 60px; right: -150px">
<h1> Project List </h1> <br><br>

<table bgcolor="grey" border="3px" >
    <tr>
        <td style="padding: 30px">Project ID</td>
        <td style="padding: 30px">Project Title</td>
        <td style="padding: 30px">Project Duration</td>
        <td style="padding: 30px">Student</td>
        <td style="padding: 30px">Supervisor</td>
        <td style="padding: 30px">Examiner 1</td>
        <td style="padding: 30px">Examiner 2</td>
        <td style="padding: 30px">Operations</td>
        
</tr>

@foreach($senarai as $papar)
<tr align="center">
    <td>{{$papar['id']}}</td>
    <td>{{$papar['title']}}</td>
    <td>{{$papar['duration']}}</td>
    <td>{{$papar['student']}}</td>
    <td>{{$papar['supervisor']}}</td>
    <td>{{$papar['examiner1']}}</td>
    <td>{{$papar['examiner2']}}</td>
    <td><a href={{"upd/".$papar['id']}}>Assign Project</a></td>
</tr>
@endforeach
</table>

</div>
</div>
@include("admin.adminscript")   
  </body>
</html>