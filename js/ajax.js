<script type="text/javascript">
var xmlhttp = function process() {
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp.open("POST","process.php",true);
  xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
  xmlhttp.send("username=username&email=email&password=password");
  }
else
  {// code for IE6, IE5
  xmlhttp.open("POST","ajax_test.asp",true);
  xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
  xmlhttp.send("username=username&email=email&password=password");
  }
}
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    alert("Enregistré avec succès");
    }
  }
</script>  