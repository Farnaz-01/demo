<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Registration Form</h2>
 
  <form onsubmit="return handelsubmt()">
    <label>Name:</label>
    <input type="text" id="name" />
 
    <label>ID:</label>
    <input type="text" id="studentId" />
 
    <label>Age:</label>
    <input type="number" id="age" />
 
    <label>Department:</label>
    <select id="department">
      <option value="">-- Select Department --</option>
      <option value="CSE">CSE</option>
      <option value="EEE">EEE</option>
      <option value="BBA">BBA</option>
    </select>
 
    <button type="submit">Submit</button>
  </form>
 
 
<script>
 
function handelsubmt()
{
var name= document.getElementById("name").value;
var id= document.getElementById("studentId").value;
var age= document.getElementById("age").value;
var Department= document.getElementById("department").value;
 
if(name===""||age===""||id===""||Department==="")
{
    alert("Fill the box");
    return false;
}
 
alert("The registration is complete"+ "\n"+
"name:"+ name + "\n"+
"age:"+ age + "\n"+
"id:"+ id + "\n"+
"Dept:"+ Department + "\n")
 
return false;
 
}
 
</script>
</body>
</html>