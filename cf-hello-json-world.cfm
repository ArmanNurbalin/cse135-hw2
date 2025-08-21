<cfscript>
    // Create a ColdFusion struct (like an object or associative array)
    data = {
        "message": "Hello, JSON!",
        "timestamp": Now(),
        "ipAddress": CGI.REMOTE_ADDR
    };

    // Serialize the struct to a JSON string
    jsonString = SerializeJSON(data);
</cfscript>
<cfheader name="Content-Type" value="application/json">
<cfcontent variable="#jsonString#">
