<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Заявка на электромонтаж</title>
</head>

<body>
    <h1>Создать заявку</h1>
    <form action="create_request.php" method="POST">
        <label>Тип объекта:</label>
        <select name="type">
            <option value="Квартира">Квартира</option>
            <option value="Дом">Дом</option>
            <option value="Гараж">Гараж</option>
            <option value="Офис">Офис</option>
        </select><br><br>

        <label>Адрес:</label>
        <input type="text" name="address" required><br><br>

        <label>Телефон:</label>
        <input type="text" name="phone" required><br><br>

        <button type="submit">Отправить заявку</button>
    </form>
</body>

</html>

<?php
// $mouth =  2222;

// if ($mouth == 12 or $mouth == 1 or $mouth == 2) {
//     echo '1 пора года(зима)';
// } elseif ($mouth >= 3 and $mouth <= 5) {
//     echo '2 пора года(весна)';
// } elseif ($mouth >= 6 and $mouth <= 8) {
//     echo '3 пора года(лето)';
// } elseif ($mouth >= 9 and $mouth <= 11) {
//     echo '4 пора года(весна)';
// } else {
//     echo 'не верное число месяца';
// }


// $string = '555';
// if (in_array($string[0], [1, 2, 3]) || in_array($string[1], [1, 2, 3])) {
//     echo 'yes';
// } else {
//     echo 'not';
// }


// $integer = 121121;
// $array = str_split((string)$integer);
// $fun1 = $array[0] + $array[1] + $array[2];
// $fun2 = $array[3] + $array[4] + $array[5];
// if ($fun1 == $fun2) {
//     echo 'win';
// } else {
//     echo 'lose';
// }

// $arr = ['user1' => 28, 'user2' => 30, 'user3' => 32];

// foreach ($arr as $key => $elem) {
//     echo ' name - ' . $key . ' age - ' . $elem . '<br>';
// }

// $num = 10; // начальное число
// $i = 0; // счетчик итераций
// while ($num <= 1000) {
//     $num *= 3;
//     $i++;
//     echo $num . '/ ';
// }
// echo "\nФинальное число: $num";
// echo "\nКоличество итераций: $i";


// for ($i = 1; $i <= 99; $i++) {
//     if ($i % 2 !== 0) {
//         echo $i . '<br>';
//     }
// }

// $i = 0;
// $arr = [2, -5, 9, -15, 1, 4];
// foreach ($arr as $elem) {
//     if ($elem > 0) {
//         $i += $elem;
//     }
// }
// echo $i;



// $arr = [10, 20, 30, 50, 235, 3000];
// $n1 = 1;
// $n2 = 2;
// $n5 = 5;
// foreach ($arr as $number) {
//     $numF = (string)$number;
//     $firstDigit = $numF[0];
//     if ($firstDigit == $n1 or $firstDigit == $n2 or $firstDigit == $n5) {
//         echo "Число $number \n";
//     }
// }


// $arr = [100, 200, 300, 400, 500];

// foreach ($arr as $number) {
//     $str = (string)$number;
//     $elem = $str[0];
//     if ($elem == 1 or $elem == 3 or $elem == 5) {
//         echo "цифры - $number \n ";
//     }
// }



// $arr = ['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'];

// foreach ($arr as $key => $ar) {

//     if ($key == 5 or $key == 6) {
//         echo " <strong>$ar</strong> \n";
//     } else {
//         echo "$ar \n";
//     }
// }

// for ($i = 1; $i <= 9; $i++) {
//     $in = $i . '-';
//     print_r((string)$in);
// }


// $arr = [1, 2, -22, 11];
// $num = 0;
// foreach ($arr as $elem) {
//     if ($elem > 0) {
//         $num += $elem;;
//     } else {
//         break;
//     }
// }
// echo $num;


// $arr = [4, 3, 22, -11, 3];

// foreach ($arr as $key => $ar) {
//     if ($ar == 3) {
//         echo $key . '<br>';
//         break;
//     }
// }


// $o = 0;
// $count = 0;
// for ($i = 1;; $i++) {
//     $o += $i;
//     $count++;
//     if ($o > 100) {
//         break;
//     }
// }
// echo $count . '<br>';
// echo $o;


// $num = 1; // начальное число
// $i = 0; // счетчик итераций
// $o = 0; //сумма
// while ($o <= 100) {
//     $o += $num;
//     $i++;
//     $num++;
// }
// echo "\nФинальное число: $o";
// echo "\nКоличество итераций: $i";


// $arr = ['a', 'c', '2', 'd', 'c'];
// $flag = false;

// foreach ($arr as $elem) {
//     if ($elem === 'c') {
//         $flag = true;
//         break;
//     }
// }

// if ($flag === true) {
//     echo 'В массиве есть буква С';
// } else {
//     echo 'В массиве нет буквы С';
// }


// $num = 13;
// $flag = false;
// if ($num % 2 !== 0) {
//     $flag = true;
// }

// if ($flag === true) {
//     echo 'число простое';
// } else {
//     echo 'число не простое';
// }


// for ($i = 1; $i <= 3; $i++) {
//     for ($j = 1; $j <= 3; $j++) {
//         echo $i . $j . ' ';
//     }
// }


// $arr = [1, 2, 3, 4, 5, 6, 7, 8];
// $length = count($arr) / 2;

// for ($i = 0; $i < $length; $i++) {
//     echo $arr[$i];
// }


// $arr = [];

// for ($i = 1; $i <= 99; $i++) {
//     if ($i % 2 !== 0) {
//         $arr[] = $i;
//     }
// }
// var_dump($arr);

// $arr = [10, 20, 30, 40, 21, 32, 51];
// $sum = 0;
// foreach ($arr as $elem) {
//     $FD = (int)($elem / 10);
//     if ($FD == 1 || $FD == 2) {
//         $sum += $elem;
//     }
// }
// echo $sum;



// $arr = [1, 2, 3, 4, 5];
// $res = '';

// foreach ($arr as $elem) {
//     if ($elem === 3) {
//         $res = '+++';
//         break;
//     } else {
//         $res = '---';
//     }
// }

// echo $res;
