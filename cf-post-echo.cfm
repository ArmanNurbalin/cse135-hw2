<!DOCTYPE html>
<html lang="en">
<head><title>POST Echo</title></head>
<body>
    <cfif structKeyExists(FORM, "fieldnames")>
        <h1>POST Request Echo</h1>
        <h3>Received the following POST data:</h3>
        <cfdump var="#FORM#">
        <hr>
    </cfif>

    <h2>Submit a POST Request</h2>
    <form action="cf-post-echo.cfm" method="post">
        <label for="course">Course:</label>
        <input type="text" id="course" name="course" value="CSE 135">
        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
