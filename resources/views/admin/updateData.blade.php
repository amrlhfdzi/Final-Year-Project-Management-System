<head>
  <style>
        label {width: 200px; display: inline-block; }

        input {color:#000;}
    </style>
</head>

<h1>Assign Project</h1>

<form action="/edit" method="POST">
    @csrf

    <input type="hidden" name="id" value="{{$x['id']}}">
    <br/><br/>

    <label>Title: </label> <input type="text" name="title" value="{{$x['title']}}">
    <br/><br/>

    <label>Student: </label> <input type="text" name="student" value="{{$x['student']}}">
    <br/><br/>

    <label>Supervisor: </label> <input type="text" name="supervisor" value="{{$x['supervisor']}}">
    <br/><br/>

    <label>Examiner 1: </label> <input type="text" name="examiner1" value="{{$x['examiner1']}}">
    <br/><br/>

    <label>Examiner 2: </label> <input type="text" name="examiner2" value="{{$x['examiner2']}}">
    <br/><br/>

    <button type="submit">UPDATE</button>
    <button type="reset">RESET</button>
    <br/><br/>

</form>