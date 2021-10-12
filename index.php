<html>
<title>Send SOAP XML Reqeuest using Custom varaibles</title>
<head>
<script src="https://code.jquery.com/jquery-latest.js"></script>
<script>
  function submit_soap(){
    var country=$("#country_ISO").val();
    $.post("callme.php",{country:country},
    function(data){
      $("#xml_response").html(data);
    });
}
</script>
</head>
<body>
  <center>
    <h3>Send request to get Full Country Info</h3>
     <form id="myForm" method="post">
      Country ISO code: <input name="country_ISO" id="country_ISO" type="text" /><br />
      <input type="button" value="Submit" onclick="submit_soap()" />
    </form>
    <br>-----------
    <div id="xml_response"></div>
   </center>
</body>
</html>
