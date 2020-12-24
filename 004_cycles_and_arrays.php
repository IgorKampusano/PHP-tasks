<?php

// Циклы для данных в массивах

// 1. Создайте массив boringToys скучных игрушек и случайного количества элементов от 1 до 10, где каждый элемент этого массива это ассоциативный массив с двумя полями:
// - Название игрушки: в виде "Игрушка 1"
// - Цена игрушки: случайное число от 100 до 1000
$boringToys = [];
for ($i=0; $i < rand(1, 10); $i++) { 
    $boringToys[] = [
        
            "Название игрушки" => "Игрушка 1",
            "Цена игрушки" => rand(100, 1000)
        
    ];
}

var_dump($boringToys);

// 2. Создайте массив cars из трех машин: Мерседес - 10000 руб, BMW - 9999 руб, Автобус - 20000 руб.
// Объем данных о машинах будет увеличиваться, поэтому создайте ассоциативный массив с данными о машинах

$cars = [
    [
        "name" => "Мерседес",
        "price" => 10000
    ],
    [
        "name" => "BMW",
        "price" => 9999
    ],
    [
        "name" => "Автобус",
        "price" => 20000 
    ],
];

// 3. Посчитайте стоимость и выведите общую стоимость всех машин, и выведите ее

$carsPrice = 0;
foreach ($cars as $car) {
    $carsPrice += $car["price"];
}

var_dump($carsPrice);
// 4. Для каждой машины добавьте поле colors - возможные варианты цветов при этом для каждого цвета, есть своя надбавка к стоимости (разная для разных машин)
// Создайте массив colors с цветами для каждой машины и добавьте по три случайных цвета каждой машине для каждого цвета укажите надбавку - случайное число от 0 до 100
// Выведите этот массив и убедитесь в его правильности.

$colors = ["зеленый", "красный", "синий", "коричневый", "черный", "желтый", "белый"];
foreach ($cars as $key => $car) {
    for ($i=0; $i < 3; $i++) { 
        $cars[$key]["colors"][] = [
            "name" => $colors[rand(0, count($colors) - 1)],
            "extra" => rand(0, 100),
        ];  
    }
}

// 5. Каталог автомобилей.
// А теперь выведите весь каталог автомобилей в виде: "Автомобиль {} цвета {} всего за: {} руб", вместо {} поставьте соответственно: название автомобиля, цвет, стоимость в этом цвете

foreach ($cars as $key => $car) {
    foreach ($car["colors"] as $color) {
        var_dump("Автомобиль " . $car["name"] . " цвета " . $color["name"] . " всего за: " . ($color["extra"] + $car["price"]));
    }
}