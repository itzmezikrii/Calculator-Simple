<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/styles.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="calculator">
            <div class="display-screen">
                <div id="display"></div>
            </div>
            <div class="buttons">
    <table>
        <tr>
            <td><button class="operator-first" id="clear">C</td>
            <td><button class="operator-first" id="/">&divide</td>
            <td><button class="operator-first" id="*">&times</td>
            <td><button class="operator" id="backspace"><</td>
        </tr>
        </tr>
        <tr>
            <td><button class="number" id="1">1</td>
            <td><button class="number" id="2">2</td>
            <td><button class="number" id="3">3</td>
            <td><button class="operator" id="-">-</td>
        </tr>
        </tr>
        <tr>
            <td><button class="number" id="4">4</td>
            <td><button class="number" id="5">5</td>
            <td><button class="number" id="6">6</td>
            <td><button class="operator" id="-">+</td>
        </tr>
        <tr>
            <td><button class="number" id="7">7</td>
            <td><button class="number" id="8">8</td>
            <td><button class="number" id="9">9</td>
            <td rowspan="2"><button class="equal" id="equal">=</td>
        </tr>
        <tr>
            <td colspan="2"><button class="number" id="0">0</button></td>
            <td><button class="number" id=",">,</button></td>
      </tr>
    </table>
    </div>
    </div>
    </div>  
    <script >
        const display = document.querySelector('#display');
const buttons = document.querySelector('button');

buttons.forEach((item) => {
    item.onclick = () => {
        if(item.id == 'clear'){
            display.innerText = '';
        }else if(item.id == 'backspace'){
            let string = display.innerText.toString();
            display.innerText = string.Substr(0, string.length - 1);
        }else if(display.innnerText != '' && item.id == 'equal'){
            display.innerText = eval(display.innerText);
        }else if(display.innerText == '' && item.id == 'equal'){
            display.innerText = 'empty!';
            setTimeout(() => (display.innerText = ''), 2000);
        }else{
            display.innerText += item.id;
        }
    }    
})

    </script>
</body>
</html>