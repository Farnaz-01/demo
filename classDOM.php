<!DOCTYPE html>
<head>
    <title>
        DOM
    </title>
</head>
 
<html>
 
<body>
 
<h1 id="new" > "This is the JS Intro class" </h1>
 
 
<h2 id="new2">" "</h2>
 
<p id="para">  Today we will learn about Dom and form validation </p>
 
<button onclick="greet()" > click me </button>
 
<script>
document.getElementById("new").innerHTML="Heloo Welcome to DOM";
document.getElementById("new2").innerHTML="This the Online class of WT";
 
var para=document.getElementById("para");

document.getElementById("para").innerHTML='Life is beautiful <3'
 
para.style.color="blue";
para.style.backgroundColor="pink";
para.style.fontWeight="bold";
 
function greet()
{
    alert("hello world");
}
 

 
</script>
</body>
 
 
</html>