<!DOCTYPE html>
<html>
<head>
    <title>Text Analizer</title>

    <style>
        

        textarea {
            width: 500px;
            height: 150px;
        }

        

        #result {
            
            border: 1px solid black;
            width: 500px;
            height: 60px;
            
        }
    </style>
</head>

<body>

    
    <textarea id="txtInp" placeholder="Enter text here "></textarea>
    <br>
    <button onclick="anzTxt()">Analyze Text</button>
<br>
 <br>   
    <div id="result"></div>

    <script>
        function anzTxt() {

            
            var text = document.getElementById("txtInp").value;

            if (text === "") {
                document.getElementById("result").innerHTML = "Please enter some text.";
                return;
            }

            
            var charCnt = text.length;

            var trmTxt = text.trim();
            var wdArr = trmTxt.split(" ");


            var wdCnt = 0;
            for (var i = 0; i < wdArr.length; i++) {
            if (wdArr[i] !== "") {
            wdCnt++;}
            }
            


            var rev = text.split("").reverse().join("");

            document.getElementById("result").innerHTML =
                "Total Characters: " + charCnt + "<br>" +
                "Total Words: " + wdCnt + "<br>" +
                "Reversed Text: " + rev;
        }
    </script>

</body>
</html>