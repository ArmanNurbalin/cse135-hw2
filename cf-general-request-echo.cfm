<!DOCTYPE html>
<html lang="en">
<head><title>General Request Echo</title></head>
<body>
    <h1>General Request Echo</h1>
    <cfoutput>
        <p>Request Method: #CGI.REQUEST_METHOD#</p>
    </cfoutput>
    <hr>
    <h3>URL Data (GET Scope):</h3>
    <cfdump var="#URL#">
    <h3>Form Data (POST Scope):</h3>
    <cfdump var="#FORM#">
</body>
</html>
