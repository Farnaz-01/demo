<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>DOM practice 2</title>
</head>
<body>

<div id=f1>
<div class=box> first div </div>
<div class=box> second div </div>
<div class=box>  third div</div>


<div class=try> first div </div>
<div class=try> second div </div>
<div class=try>  third div</div>

<script>
//let box = document.gebcn("box")
let box1 =document.getElementByClassName("box")

box1[0].innerText = "This is the first div"
box[1].innerHTML = "This is the second div" 
box[2].innerHTML = "This is the third div"
</div>
</script>


</body>
</html>