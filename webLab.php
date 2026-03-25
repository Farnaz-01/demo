<!DOCTYPE html>
<html>
<head>
    <title>Text Analysis Tool</title>
    <style>
        textarea {
            width: 500px;
            height: 150px;
        }

        
        
        
        .result {
            margin-top: 20px;
            padding: 15px;
            background-color: #f0f0f0;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>



<textarea id="myText" placeholder="Paste your paragraph here..."></textarea>
<br>
<button id="analyzeBtn">Analyze Text</button>

<div id="result" class="result"></div>

<script>
    // Get elements
    var textarea = document.getElementById("myText");
    var button = document.getElementById("analyzeBtn");
    var resultDiv = document.getElementById("result");
    
    // Function to analyze text
    function analyzeText() {
        // Get the text from textarea
        var text = textarea.value;
        
        // Handle empty input
        if (text === "") {
            resultDiv.innerHTML = "Please enter some text to analyze.";
            return;
        }
        
        // Count characters
        var charCount = text.length;
        
        // Count words (handle multiple spaces)
        var words = text.split(" ");
        
        
        
        // Reverse the text
        var reversedText = "";
        for (var i = text.length - 1; i >= 0; i--) {
            reversedText = reversedText + text[i];
        }
        
        // Display results
        resultDiv.innerHTML = "<strong>Analysis Results:</strong><br><br>" +
                              "Total Characters: " + charCount + "<br>" +
                              "Total Words: " + wordCount + "<br>" +
                              "Reversed Text: " + reversedText;
    }
    
    // Add event listener to button
    button.addEventListener("click", analyzeText);
</script>

</body>
</html>