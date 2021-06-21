<?php

function task1(array $strings, $return = true)
{
	$newString = implode("\n", array_map(function (string $str) {
		return "<p>$str</p>";
	}, $strings));

	if ($return) {
		return $newString;
	}

	echo $newString;
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
	if (!is_int($cols) || !is_int($rows)) {
		trigger_error('Введите целое число');
		return false;
	}
	if( $cols < 0 || $rows < 0) {
		trigger_error("Введите положительное значение");
		return false;
	}
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

}
