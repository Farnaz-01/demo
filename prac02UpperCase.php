<!DOCTYPE html>
<html>
<head>
<title> Mid Prac 02 </title>
</head>

<body>
<form>

<table>
<tr>  <td>User Name :</td>
<td><input type="text" placeholder="Enter Your Name" id= "t1"></td>
 </tr>
</table>
</form>

<script>
var txt = document.getElementById("t1").value;

function mkItBig(){
    txt.value=txt.value.toUpperCase();
    console.log("Done!!")
}

txt.addEventListener("input", mkItBig);

</script>
</body>
</html>