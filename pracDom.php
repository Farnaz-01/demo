<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2 id="hi">Hello Javasript</h2>
    <h2 id ="drm">You can never get back today<h2>
   <script>

console.log('\n')
let apnd = " from Apna College students ";
let hed2 = document.getElementById("hi")
let be=document.getElementById('drm')
console.log(hed2.append(apnd))

be.innerHTML = be.innerHTML + " So make the most of it"

be.style.backgroundColor = "yellow"

be.style.fontFamily="cursive"

    </script>

</body>
</html>