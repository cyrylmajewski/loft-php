<?php

function task1(array $strings, $allInOne = false)
{
	$newString = '';
	if ($allInOne) {
		foreach ($strings as $key => $value) {
			$newString = $newString . " " . $value;
		}
	} else {
		foreach ($strings as $key => $value) {
			echo "<p> {$value} </p>";
		}
	}
	return $newString;
}

function task2(string $operation, ...$numbers)
{
	$result = 0;

	switch ($operation) {
		case '+':
			foreach ($numbers as $key => $number) {
				$result += $number;
			}
			echo "<p>Результат сложения: $result</p>";
			break;
		case '-':
			foreach ($numbers as $key => $number) {
				$result -= $number;
			}
			echo "<p>Результат вычитания: $result</p>";
			break;
		case '*':
			$result = array_shift($numbers);
			foreach ($numbers as $key => $number) {
				$result *= $number;
			}
			echo "<p>Результат умножения: $result</p>";
			break;
		case '/':
			$result = array_shift($numbers);
			foreach ($numbers as $key => $number) {
				$result /= $number;
			}
			echo "<p>Результат деления: $result</p>";
			break;
		default:
			echo "Введите корректные значения";
	}
}

function task3($cols, $rows)
{
	if (is_int($cols) && is_int($rows)) {
		echo "<table>";
		for ($i = 1; $i < $cols + 1; $i++) {
			echo "<tr>";
			for ($j = 1; $j < $rows + 1; $j++) {
				$number = $j * $i;
				echo "<td> {$number} </td>";
			}
			echo "</tr>";
		}

		echo "</table>";
	} else {
		echo "Введите целое число";
	}
}
