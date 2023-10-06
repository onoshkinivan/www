<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo '<b>Hello<b> World <b>';
    //Комментарий одной строки
    /*
    Многострочный комментарий
    */
    #Комментарий одной строки
    $value = 100;
    echo $value;
    $value = 'текст';
    echo '<br> В переменной value значение: '.$value'<br>';
    //define-константа, неизменяемое
    //$-сздает переменную в php
    //echo-вывод строки в браузер
    define("CONSTANT", "Константа");
    echo CONSTANT.'<br>';
    $x=100;
    $y=2;
    $z=$x+$y;
    
    $x=x+10;
    $x+=10;
    $x++;
    echo $x.'<br>';
//M_PI-число пи
//round-округление чисел
//mt_rand-случайное число, рандомайзер
    echo 'Число Пи: '.M_PI.'<br>';
    echo 'Округление до сотых: '.round(3.5888749, 2).'<br>';
    echo 'Случайное число от 20 до 80: '.mt_rand(20, 80).'<br>';

    $str = "Привет";
    echo 'Строка $str <br>';
//strlen-узнать длину строки
//Для кириллицы mb_
//strtoupper - делает верний регистр
//trim - удалять пробелы
    echo "<input type='text> <br>";
    $lenght = strlen($str);
    echo "Длина строки $lenght символов <br>";
    echo "Перевести строку в верхний регистр: ". mb_strtoupper($str) . "<br>";
    echo strlen(trim($str));
//var_dump-выдает тип и значение выражения в браузер
    echo'<br>'.1+5;
    $result= 2>4;
    var_dump($result);
    echo '<br>';
    echo '2'+'10';
    ?>
</body>
</html>