<!DOCTYPE html>
<html>
<head>
    <title>Practice Form</title>
    <link rel="stylesheet" href="sform.css">
</head>
<body>

<h2>Student Registration Form</h2>

<form>

    
    Name: <input type="text" id="name" minlength="2" maxlength ="50" ><br><br>
    

    
    Department:
    <select id="dept">
        <option value="">Select</option>
        <option value="CSE">CSE</option>
        <option value="EEE">EEE</option>
    </select><br><br>

    
    Gender:
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female
    <br><br>

    
    Skills:
    <input type="checkbox" name="skill" value="HTML"> HTML
    <input type="checkbox" name="skill" value="CSS"> CSS
    <input type="checkbox" name="skill" value="JS"> JavaScript
    <br><br>

    
    Date of Birth:
    <input type="date" id="dob"><br><br>

    
    Age:
    <input type="number" id="age" min=14 max=18><br><br>

    Email:
    <input type="email" id="mail"  placeholder="Enter your email"><br> <br>

    Password:
    <input type="password" id="pass"  placeholder="Enter your password"><br> <br>

    
    <input type="checkbox" id="agree"> I agree to terms<br><br>

    
    <button type="button" id="btn">Submit</button>

</form>

<script>
var btn = document.getElementById("btn");
btn.addEventListener("click", ()=>{

    
    var name = document.getElementById("name").value;
    
    
    var dept = document.getElementById("dept").value;

    
    var genderList = document.getElementsByName("gender");
    var gender = "";
    for(var i = 0; i < genderList.length; i++){
        if(genderList[i].checked){
            gender = genderList[i].value;
        }
    }

    
    var skillList = document.getElementsByName("skill");
    var skills = [];
    for(var i = 0; i < skillList.length; i++){
        if(skillList[i].checked){
            skills.push(skillList[i].value);
        }
    }

    
    var dob = document.getElementById("dob").value;

    
    var age = document.getElementById("age").value;

    var mail = document.getElementById("mail").value;
    var pass = document.getElementById("pass").value;

    var agree = document.getElementById("agree").checked;

   
    if(name === ""  || dept === "" || gender === "" || skills.length === 0 || dob === "" || age === "" || !agree || mail==="" || pass===""){
        alert("Please fill all fields properly!");
    } else {
        alert(
            "Success!\n\n" +
            "Name: " + name + "\n" +
            "Department: " + dept + "\n" +
            "Gender: " + gender + "\n" +
            "Skills: " + skills.join(", ") + "\n" +
            "DOB: " + dob + "\n" +
            "Age: " + age + "\n" +
            "Email: "+mail + "\n" +
            "Password: " + pass
        );
    }

});
</script>

</body>
</html>