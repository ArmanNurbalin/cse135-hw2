<cfscript>
    // Clear all variables from the session, effectively ending it.
    StructClear(Session);
</cfscript>

<!DOCTYPE html>
<html lang="en">
<head><title>CFML Session Destroyed</title></head>
<body>
    <h1>Session Destroyed</h1>
    <a href="cf-state-demo-p1.cfm">Back to Page 1</a><br>
    <a href="cf-state-demo-p2.cfm">Back to Page 2</a>
</body>
</html>
