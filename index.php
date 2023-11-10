<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Scientific Calculator</title>
</head>
<body>  
    <div class="calculator">
        <input class = " output"type="text" id="display" disabled>
        <div class="buttons">
            <!-- Buttons for digits, operators, and functions -->
            <button class = "calculator__key--operator" onclick="appendToDisplay('Math.sqrt(')">√</button>
            <button class = "calculator__key--operator" onclick="appendToDisplay('Math.pow(')">^</button>
            <button onclick="clearDisplay()">C</button>

            <button class = "calculator__key--operator" onclick="appendToDisplay('/')">/</button>
           
            <button onclick="appendToDisplay('7')">7</button>
            <button onclick="appendToDisplay('8')">8</button>
            <button onclick="appendToDisplay('9')">9</button>
            <button class = "calculator__key--operator" onclick="appendToDisplay('*')">*</button>

            <button onclick="appendToDisplay('4')">4</button>
            <button onclick="appendToDisplay('5')">5</button>
            <button onclick="appendToDisplay('6')">6</button>
            <button class = "calculator__key--operator" onclick="appendToDisplay('-')">-</button>
            
            <button onclick="appendToDisplay('1')">1</button>
            <button onclick="appendToDisplay('2')">2</button>
            <button onclick="appendToDisplay('3')">3</button>
            <button class = "calculator__key--operator" onclick="appendToDisplay('+')">+</button>
            
            <button onclick="appendToDisplay('0')">0</button>
            <button onclick="appendToDisplay('.')">.</button>
            <button class = "calculator__key--enter" onclick="calculate()">=</button>
           
           
           
           
            <!-- Add more buttons for additional functions -->
        </div>
    </div>
    <script src="calculator.js"></script>
</body>
</html>
