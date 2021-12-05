<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DZ2_1</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div>
        <form action="result.php" method="GET" class="column">
        <label for="first"><input type="text" id="first" name="first">Первое значение</label>
        <label for="second" ><input type="text" id="second" name="second">Вторе значение</label>
        <label for="third" ><input type="text" id="third"  name="third">Третье значение</label>
        <label for="fourth" ><input type="text" id="fourth" name="fourth" >Четвёртое значение</label>
        <label for="one"><input type="radio" value="1" id="one" name="radio" >Прямоугольная диаграмма</label>
        <label for="two"><input type="radio" value="0" id="two" name="radio" >Круглая диаграмма</label>
        <button>Send</button>
        </form>
    </div>
</body>

</html>