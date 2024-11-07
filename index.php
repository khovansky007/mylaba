<?php

require 'vendor/autoload.php';
require_once 'src/Point.php';  // Убедитесь, что путь правильный
require_once 'src/Vector.php'; // Точно так же для Vector.php


use App\MagicClass;

// Создаем объект, чтобы вызвать __construct
$instance = new MagicClass();

// Демонстрация __call
$instance->undefinedMethod();

// Демонстрация __callStatic
MagicClass::undefinedStaticMethod();

// Демонстрация __get
echo $instance->undefinedProperty;

// Демонстрация __set
$instance->undefinedProperty = "value";

// Демонстрация __isset
isset($instance->undefinedProperty);

// Демонстрация __unset
unset($instance->undefinedProperty);

// Демонстрация __toString
echo $instance;

// Демонстрация __invoke
$instance();

// Демонстрация __clone
$clonedInstance = clone $instance;

// Демонстрация __debugInfo
var_dump($instance);



$T1 = new Point(2, 3);

$V1 = new Vector(4, 5);

$V2 = new Vector(0, 0);

$V3 = new Vector(-5, 4); // Перпендикулярен V1

echo "Длина вектора V1: " . $V1->length() . "\n";
echo "Длина вектора V2: " . $V2->length() . "\n";
echo "Длина вектора V3: " . $V3->length() . "\n";

echo "V1 перпендикулярен V3: " . ($V1->isPerpendicularTo($V3) ? "Да" : "Нет") . "\n";

// Переносим точку T1 на вектор V1
$T1->moveX($V1->x);
$T1->moveY($V1->y);

echo "T1: (" . implode(", ", [$T1->x, $T1->y]) . ")\n";