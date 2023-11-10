function appendToDisplay(value) {
    document.getElementById('display').value += value;
}

function calculate() {
    try {
        document.getElementById('display').value = eval(document.getElementById('display').value);
    } catch (error) {
        document.getElementById('display').value = 'Error';
    }
}

function clearDisplay() {
    document.getElementById('display').value = '';
}

function calculateSquareRoot() {
    document.getElementById('display').value = Math.sqrt(eval(document.getElementById('display').value));
}

function convertToCelsius() {
    const fahrenheit = eval(document.getElementById('display').value);
    const celsius = (fahrenheit - 32) * (5 / 9);
    document.getElementById('display').value = celsius.toFixed(2);
}

function convertToFahrenheit() {
    const celsius = eval(document.getElementById('display').value);
    const fahrenheit = (celsius * 9 / 5) + 32;
    document.getElementById('display').value = fahrenheit.toFixed(2);
}
