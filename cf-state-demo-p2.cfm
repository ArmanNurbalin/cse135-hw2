<!DOCTYPE html>
<html lang="en">
<head><title>CFML State Demo - Page 2</title></head>
<body>
    <h1>ColdFusion Sessions Page 2</h1>

    <cfif isDefined("SESSION.username")>
        <cfoutput><p><b>Name:</b> #SESSION.username#</p></cfoutput>
    <cfelse>
        <p><b>Name:</b> You do not have a name set.</p>
    </cfif>
    <br>
    <a href="cf-state-demo-p1.cfm">Go back to Session Page 1</a>
    
    <form style="margin-top:30px" action="cf-destroy-session.cfm" method="get">
        <button type="submit">Destroy Session</button>
    </form>
</body>
</html>
