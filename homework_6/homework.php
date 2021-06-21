<!doctype html>
<?php

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
      <?php
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

      ?>
    </table>
</body>
</html>
