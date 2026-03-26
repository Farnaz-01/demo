<!DOCTYPE html>
<html>
<head>
    <title>Practice Form</title>
    <link rel="stylesheet" href="styleForm.css">
</head>
<body>

<h2>Student Registration Form</h2>

<form>

    <!-- Text -->
    First Name: <input type="text" id="fn"><br><br>
    Last Name: <input type="text" id="ln"><br><br>

    <!-- Dropdown -->
    Department:
    <select id="dept">
        <option value="">Select</option>
        <option value="CSE">CSE</option>
        <option value="EEE">EEE</option>
        <option value="IPE">IPE</option>
    </select><br><br>

    <!-- Radio -->
    Gender:
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female
    <br><br>

    <!-- Checkbox -->
    Skills:
    <input type="checkbox" name="skill" value="HTML"> HTML
    <input type="checkbox" name="skill" value="CSS"> CSS
    <input type="checkbox" name="skill" value="JS"> JavaScript
    <br><br>

    <!-- Date -->
    Date of Birth:
    <input type="date" id="dob"><br><br>

    <!-- Number -->
    Age:
    <input type="number" id="age"><br><br>

    <!-- Checkbox (single) -->
    <input type="checkbox" id="agree"> I agree to terms<br><br>

    <!-- Button -->
    <button type="button" id="btn">Submit</button>

</form>

<script>
document.getElementById("btn").addEventListener("click", function(){

    // Text
    var fname = document.getElementById("fn").value;
    var lname = document.getElementById("ln").value;

    // Dropdown
    var dept = document.getElementById("dept").value;

    // Radio
    var genderList = document.getElementsByName("gender");
    var gender = "";
    for(var i = 0; i < genderList.length; i++){
        if(genderList[i].checked){
            gender = genderList[i].value;
        }
    }

    // Checkbox (multiple)
    var skillList = document.getElementsByName("skill");
    var skills = [];
    for(var i = 0; i < skillList.length; i++){
        if(skillList[i].checked){
            skills.push(skillList[i].value);
        }
    }

    // Date
    var dob = document.getElementById("dob").value;

    // Number
    var age = document.getElementById("age").value;

    // Checkbox (single)
    var agree = document.getElementById("agree").checked;

    // Validation
    if(fname === "" || lname === "" || dept === "" || gender === "" || skills.length === 0 || dob === "" || age === "" || !agree){
        alert("Please fill all fields properly!");
    } else {
        alert(
            "Success!\n\n" +
            "Name: " + fname + " " + lname + "\n" +
            "Department: " + dept + "\n" +
            "Gender: " + gender + "\n" +
            "Skills: " + skills.join(", ") + "\n" +
            "DOB: " + dob + "\n" +
            "Age: " + age
        );
    }

});
</script>

</body>
</html>