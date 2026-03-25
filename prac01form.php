<!DOCTYPE html>
<html>
<head>
<title>HTML Form</title>

<style>

body{
background-color:  rgb(163, 220, 223);

}

form{

height: 1000px;
width: 1000px;

background-color: rgb(169, 145, 219);
border: 3px solid rgb(32, 9, 82);


}


button{


width: 500px;
height: 50px;
margin: auto;
display: block; 
border: 3px solid rgb(87, 30, 161);
}
</style>

</head>
<body>



<form >

<table>
<tr>
<td>First Name:</td>
<td><input type="text" placeholder="Enter First Name" minlength="2" id="fn">  </td>
</tr>

<br>
<tr>
<td>Last Name:</td>
<td> <input type="text" placeholder="Enter Last Name" minlength="2" id="ln"> </td>
</tr>


</table>

<button  id="butn"> Submit </button>
</form>

<!--
<script>

var btn = document.getElementById("butn");

function FireSubmit(){
var Fname= document.getElementById("fn").value;
var Lname= document.getElementById("ln").value;

if(Fname===""|| Lname===""|| Fname.length <2 || Lname.length <2 ){

alert("Please Fill up the Name at least two chaecter"+"\n"
    "Your Current state is :"+"\n"+
    "First Name : "+Fname+"\n"+
    "Last Name : "+ Lname+"\n"
);
    return false;

}
else{
    alert(
    "First Name : "+Fname+"\n"+
    "Last Name : "+ Lname+"\n"
);
}
console.log("Fired successfully");
}

btn.addEventListener("click",FireSubmit);

</script> -->
<button type="button" id="butn">Submit</button>

<script>
document.getElementById("butn").addEventListener("click", function(){

    var Fname = document.getElementById("fn").value;
    var Lname = document.getElementById("ln").value;

    if(Fname === "" || Lname === "" || Fname.length < 2 || Lname.length < 2){
        alert("Invalid input");
    } else {
        alert("Success");
    }

});
</script>
</body>
</html>