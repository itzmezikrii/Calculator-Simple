<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <style>
        .container{
            font-family: 'Poppins';font-size: 12px;
        }
        h2{
            font-family: 'Poppins';font-size: 22px;
        }
        button{
            font-family: 'Poppins';font-size: 12px;
        }
    </style>
    <title>Javascript Calculator</title>
</head>
<body>
    <div class="container">
        <h2>Simple Calculator | Ramadhan Gabut</h2>

        <label for="">Input First Number</label><br>
            <input type="text" id="fnumb" class="input"><br><br>

        <label for="">Input Second Number</label><br>
            <input type="text" id="snumb" class="input"><br><br>

        <label for="" class="select">Select Operator</label><br>
            <input class="fclc"type="button" value="+" onclick="add()">
            <input class="clcbtn"type="button" value="-" onclick="substract()">
            <input class="clcbtn"type="button" value="&#215" onclick="kali()">
            <input class="clcbtn"type="button" value="&divide" onclick="divide()">
            <input class="clcbtn"type="button" value="%" onclick="modulus()"><br><br>

        <label for="">Calculation Result</label><br>
            <input type="text" id="result" class="input"><br><br>
    </div>
        <script src="js/script.js"></script>
    </body>
</html>