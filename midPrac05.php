<!DOCTYPE html>
<html>
<head><title>
   
</title></head>
 
<body id="bd">
   
<button id=but >Change Background</button>
    
    
    
    <script>

    var but = document.getElementById("but");
    var count =0;
    
     
    
    but.addEventListener("click",()=>{


    var bd = document.getElementById("bd")
    count++;
     if(count==1){
        console.log(1);
        bd.style.backgroundColor="blue";
     }
     else if(count==2){
        console.log(2);
        bd.style.backgroundColor="yellow";
     }
     else if(count==3){
        console.log(3);
        bd.style.backgroundColor="lavender";
     }

    })


    
    
    </script>
 
</body>
</html>