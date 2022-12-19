<h1>Assign Project</h1>

<form action="/edits" method="POST">
    @csrf

    <input type="hidden" name="id" value="{{$x['id']}}">
    <br/><br/>

    Title: <input type="text" name="title" value="{{$x['title']}}">
    <br/><br/>

    Project Start Date: <input type="text" name="start" value="{{$x['start']}}">
    <br/><br/>

    Project End Date: <input type="text" name="end" value="{{$x['end']}}">
    <br/><br/>

    Project Progress: </label> <select name = "dropdown">
            <option value = "Choose the option" selected>Choose the option</option>
            <option value = "Milestone 1">Milestone 1</option>
            <option value = "Milestone 2">Milestone 2</option>
            <option value = "Final Report">Final Report</option>
         </select><br/><br/>

    Project Status: <select name = "dropdown2">
            <option value = "Choose the option" selected>Choose the option</option>
            <option value = "On track">On track</option>
            <option value = "Delayed">Delayed</option>
            <option value = "Extended">Extended</option>
            <option value = "Completed">Completed</option>
         </select><br/><br/>



    <button type="submit">UPDATE</button>
    <button type="reset">RESET</button>
    <br/><br/>

</form>