<?php


while (true) {
    echo "Когда вступил на престол император Николай 2? \n";
    $question = readline("Выберите один из вариантов ответа: \n
        30 февраля 1894 \n
        20 октября 1894 \n
        1 января 1000
        ");
    if ($question == "20 октября 1894") {
        echo 'Всё верно, поздравляем!';
        break;
    } else {
        echo "Неправильно";
    }
}


for ($i = 0; $i < 3; $i++) {
    $quest = readfile("Какая задач предстоит перед вами сегодня?");
    for ($j = 0; $j < 3; $j++) {
        $time = readline("Сколько времени займёт эта задача? \n");
        $time += $time;
    }
}

echo ("
Выполнение всех задач займёт около: $time
");



while (true) {
    $num = (int) readline("Введите положительное число ");
    if ($num > 0) {
        switch ($num % 8) {
            case 0:
            case 2:
                echo "Указательный";
                break;
            case 1:
                echo "Большой";
                break;
            case 3:
            case 7:
                echo "Средний";
                break;
            case 4:
            case 6:
                echo "Безымянный";
                break;
            case 5:
                echo "Мизинец";
                break;
        }
    } else {
        echo "Введено неверное значение";
    }
}