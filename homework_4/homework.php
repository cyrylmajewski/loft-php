<?php

$day = 2;

switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "Это рабочий день</br></br>";
        break;
    case 6:
    case 7:
        echo "Это выходной день</br></br>";
        break;
    default:
        echo "Неизвестный день</br></br>";
}
