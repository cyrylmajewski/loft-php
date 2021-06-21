<?php

$age = 32;

if ($age >= 18 && $age <= 65)
{
    echo "Вам ещё работать и работать.<br/><br/>";
} else if ($age > 65) {
    echo "Вам пора на пенсию<br/><br/>";
} else if ($age < 18) {
    echo "Вам ещё рано работать<br/><br/>";
} else {
    echo "Неизвестный возраст<br/><br/>";
}
