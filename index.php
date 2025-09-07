<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .das {
            color: red;
            background-color: black;
            text-decoration: underline;
            text-transform: uppercase;
            padding: 5px;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <?php
    // // Вывод данных
    // echo '<div class="das">Привет!</div>';
    // echo 'Привет!';
    // echo 123;
    // echo true;
    // // создание переменных
    // $name = "name";
    // $age = 1321321;
    // // Вывод переменных
    // $age = 1233;
    // echo $name;
    // echo $age;

    // Константы первый способ
    // const NAME = "name";
    // // echo NAME;

    // // Константы второй способ
    // define("AGE", 321);
    // // echo AGE;

    // // конкатенация(чото сложное) строк
    // $hello = "hello";
    // $something = "shelf";
    // первый способ
    // $message = $hello . ", " . $something;
    // echo $message;

    // второй способ
    // $message = "$hello, $something!";
    // echo $message;
    // третий способ
    // $html = '<div class="block">';
    // $html .= "<h1>h1</h1>";
    // $html .= "</div>";
    // echo $html;
    // Типы данных

    // $str = 'str';
    // $int_num = 123;
    // $float_num = 3.41;
    // $boolean_type = true;

    // echo gettype($str) . "</br>";
    // echo gettype($int_num) . "</br>";
    // echo gettype($float_num) . "</br>";
    // echo gettype($boolean_type) . "</br>";


    // var_dump($str);

    // $text = 'Привет, мир!';
    // // метод длинна строки
    // $length = mb_strlen($text);
    // echo "длинна строки ($text) : $length";
    // // trim

    // $text2 = "                     Привет               ";
    // echo trim($text2);

    // поиск строки под позиции
    // $text = 'Hello, world';
    // echo strpos($text, 'w');
    // перевод в нижний регистер

    // $hello = 'Hello!';
    // $uppercase = mb_strtoupper($hello);
    // $lowercase = mb_strtolower($hello);
    // echo $uppercase;
    // echo $lowercase;

    // замена под строк
    $text = 'hello hey';
    $new_text = str_replace('h', 'k', $text);
    echo $new_text
    ?>

</body>


</html>