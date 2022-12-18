<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
   @include("admin.admincss")
  </head>
  <body>
  <div class="container-scroller">
@include("admin.navbar"); 


<h1> Project List </h1>

<table border="border">
    <tr>
        <td>Project Title</td>
        <td>Project Duration</td>
        <td>Student</td>
        <td>Supervisor</td>
        <td>Examiner 1</td>
        <td>Examiner 2</td>
        <td>Operations</td>
        
</tr>

@foreach($senarai as $papar)
<tr>
    <td>{{$papar['title']}}</td>
    <td>{{$papar['duration']}}</td>
    <td>{{$papar['student']}}</td>
    <td>{{$papar['supervisor']}}</td>
    <td>{{$papar['examiner1']}}</td>
    <td>{{$papar['examiner2']}}</td>
    <td><a href={{"upd/".$papar['title']}}>Assign Project</a></td>
</tr>
@endforeach
</table>

</div>
@include("admin.adminscript")   
  </body>
</html>