<cfif isDefined("FORM.username") AND FORM.username IS NOT "">
    <cfset SESSION.username = FORM.username>
</cfif>

<!DOCTYPE html>
<html lang="en">
<head><title>CFML State Demo - Page 1</title></head>
<body>
    <h1>ColdFusion Sessions Page 1</h1>

    <cfif isDefined("SESSION.username")>
        <cfoutput><p><b>Name:</b> #SESSION.username#</p></cfoutput>
    <cfelse>
        <p><b>Name:</b> You do not have a name set.</p>
    </cfif>
    
    <form action="cf-state-demo-p1.cfm" method="post" style="margin-top:15px;">
        <label for="username">Set your name:</label>
        <input type="text" id="username" name="username">
        <input type="submit" value="Save Name">
    </form>
    <br>
    <a href="cf-state-demo-p2.cfm">Go to Session Page 2</a><br>
    
    <form style="margin-top:30px" action="cf-destroy-session.cfm" method="get">
        <button type="submit">Destroy Session</button>
    </form>
</body>
</html>
