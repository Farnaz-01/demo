<!DOCTYPE html>
<html>
<head>
    <title>WT_K</title>
</head>
 
<body>
 
<h1>Welcome to the WT Class</h1>
<p>Hello how are you</p>
 
<h1>Admission Form</h1>
 
<form>
 

<fieldset>
<legend>Personal Information</legend>
 
<table>
 
<tr>
<td>First Name:</td>
<td><input type="text" maxlength="20" required></td>
</tr>
 
<tr>
<td>Last Name:</td>
<td><input type="text" maxlength="20" required></td>
</tr>
 
<tr>
<td>Email:</td>
<td><input type="email" required></td>
</tr>
 
<tr>
<td>Date of Birth:</td>
<td><input type="date" required></td>
</tr>
 
<tr>
<td>Gender:</td>
<td>
<input type="radio" name="gender" required> Male
<input type="radio" name="gender"> Female
</td>
</tr>
 
</table>
</fieldset>
 
<br>
 


 
<table>
 
<tr>
<td>Select Course:</td>
<td>
<select required>
<option value="">--Select--</option>
<option>CSE</option>
<option>BBA</option>
<option>EEE</option>
</select>
</td>
</tr>
 
<tr>
<td>Interests:</td>
<td>
<input type="checkbox"> Programming
<input type="checkbox"> Design
<input type="checkbox"> Research
</td>
</tr>
 
<tr>
<td>Upload Transcript:</td>
<td><input type="file" required></td>
</tr>
 
<tr>
<td><input type="submit" value="Submit"></td>
</tr>
 
</table>

 
</form>
 
</body>
</html>
 