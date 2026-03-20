<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>DOM practice 2</title>
</head>
<body>

<div id="f1">
  <div class="box"> first div </div>
  <div class="box"> second div </div>
  <div class="box"> third div </div>

  <div class="try"> first div </div>
  <div class="try"> second div </div>
  <div class="try"> third div </div>
</div>

<script>
  let boxS = document.getElementsByClassName("box");
  boxS[0].innerText = "This is the first div";
  boxS[1].innerHTML = "This is the second div";
  boxS[2].innerHTML = "This is the third div";

 let tr = document.getElementsByClassName("try");
 for (let element of tr) {
        element.innerText += " , how are you?";
    }

    tr[2].innerHTML="In the Grace and Mercy"

</script>


</body>
</html>