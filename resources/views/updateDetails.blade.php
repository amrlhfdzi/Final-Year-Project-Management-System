<head>
    <style>
        label {width: 200px; display: inline-block; }

        input {color:#000;}
    </style>
  </head>

<h1>Update Project Details</h1>

<form action="/edits" method="POST">
    @csrf

    <label> Project ID: </label> <input type="text" name="id" value="{{$x['id']}}">
    <br/><br/>


    <label> Project Title: </label> <input type="text" name="title" value="{{$x['title']}}">
    <br/><br/>


    <label>Project Start Date: </label> <input type="date" name="start"  value="{{$x['start']}}">
    <br/><br/>

    <label>Project End Date: </label> <input type="date" name="end" value="{{$x['end']}}">
    <br/><br/>

    <label>Project Duration (Month): </label> <input type="text" name="duration" value="{{$x['duration']}}">
    <br/><br/>

    <label>Project Progress: </label> <select name = "dropdown">
            <option value = "Choose the option" selected>Choose the option</option>
            <option value = "Milestone 1">Milestone 1</option>
            <option value = "Milestone 2">Milestone 2</option>
            <option value = "Final Report">Final Report</option>
         </select><br/><br/>

         <label>Project Status: </label> <select name = "dropdown2">
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