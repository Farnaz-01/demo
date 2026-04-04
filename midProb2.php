<!DOCTYPE html>
<html>
<head><title>
   uppercase using 
</title>
<style>
form{
    background-color:pink;
}
</style>

</head>
 
<body>
   
    <form>

<lable>User Name : </lable>
<input type = "text" placeholder ="Enter your name" id="namo">


</form>
 <script>

var nemo = document.getElementById("namo");
nemo.addEventListener("input",()=>{

var nam = nemo.value;
nemo.value = nam.toUpperCase();// for displaying you need to do you input id name with .val
console.log(nam.toUpperCase());
})
</script>
</body>
</html>