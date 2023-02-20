<?php 

    $name = readline("Ваше имя? \n");
    $age = readline("Сколько вам лет? \n");
    echo "Ваше имя $name \nВаш возраст: $age\n";


    $name = readline("Ваше имя? \n");
    $task1 = readline("Какая задача стоит перед вами сегодня? \n");
    $time1 = readline("Сколько времени займёт эта задача?");
    $task2 = readline("Какая задача стоит перед вами сегодня? \n");
    $time2 = readline("Сколько времени займёт эта задача?");
    $task3 = readline("Какая задача стоит перед вами сегодня? \n");
    $time3 = readline("Сколько времени займёт эта задача?");

    echo "$task1 ($time1) \n";
    echo "$task2 ($time2) \n";
    echo "$task3 ($time3) \n";