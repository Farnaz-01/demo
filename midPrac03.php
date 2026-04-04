<!DOCTYPE html>
<html>
<head><title>
   
</title></head>
 
<body>
  <form>
    

  <lable>Age: </lable>
  <input type="number" id="age" min=0>

  <p id="message"> </p>
  
</form>
 
<script>

    var age = document.getElementById("age");

    age.addEventListener("input",()=>{

     var ag= age.value;
     var msg =document.getElementById("message");
     if(ag<40){
        msg.innerHTML= "To be a part of the community, you need to at least 40";
     }
    else if(ag<=40 || ag<=50){
        msg.innerText=  "You are the youngsters of this community";
    }
    else if(ag>50){
         msg.innerText=  "You are the youngsters of this community";
         msg.style.color="red";
    }

    })


</script>

</body>
</html>