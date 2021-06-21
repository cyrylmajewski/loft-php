<?php

echo "<table border='1'>";

    for ($i = 1; $i < 11; $i++) {
        echo "<tr>";
        for ($j = 1; $j < 11; $j++) {
            $number = $j * $i;
            if ($i % 2 === 0 && $j % 2 === 0) {
                echo "<td> ({$number}) </td>";
            } else if (($i - 2) % 2 === 1 && ($j - 2) % 2 === 1) {
                echo "<td>[{$number}]</td>";
            } else {
                echo "<td> {$number} </td>";
            }
        }
        echo "</tr>";
    }

echo "</table>";
