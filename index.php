<!DOCTYPE html>
<html>
<body>

<h2>Using the XMLHttpRequest Object</h2>



  
<div id="demo">
<button type="button" onclick="extern()">Change Content</button>
</div>

<script>
function extern() {
  var xhttp = new XMLHttpRequest();
  
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      lert(this.responseText);
    }
  };
  xhttp.open("GET", "xmlhttp_info.php?lang=", true);
  xhttp.send();
}
</script>

</body>
</html>
