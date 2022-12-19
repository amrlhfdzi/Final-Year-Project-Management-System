<h1>Assign Project</h1>

<form action="/edit" method="POST">
    @csrf

    <input type="hidden" name="id" value="{{$x['id']}}">
    <br/><br/>

    Title: <input type="hidden" name="title" value="{{$x['title']}}">
    <br/><br/>

    <input type=hidden name="duration" value="{{$x['duration']}}">
    <br/><br/>

    Student: <input type="text" name="student" value="{{$x['student']}}">
    <br/><br/>

    Supervisor: <input type="text" name="supervisor" value="{{$x['supervisor']}}">
    <br/><br/>

    Examiner 1: <input type="text" name="examiner1" value="{{$x['examiner1']}}">
    <br/><br/>

    Examiner 2: <input type="text" name="examiner2" value="{{$x['examiner2']}}">
    <br/><br/>

    <button type="submit">UPDATE</button>
    <button type="reset">RESET</button>
    <br/><br/>

</form>