<!DOCTYPE html>
<html>
<head>
    <title>Array Operations</title>
</head>
<body>
    <h1>Array Operations</h1>

    <?php
    $arr = array(5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9);
    
    echo "Array Elements: " . implode(", ", $arr) . "<br>";

    $oddSum = 0;
    $evenSum = 0;
    $totalSum = 0;
    $min = $arr[0];
    $max = $arr[0];
    $minPositions = [];
    $maxPositions = [];

    foreach ($arr as $index => $value) {
        if ($value % 2 == 0) {
            $evenSum += $value;
        } else {
            $oddSum += $value;
        }

        $totalSum += $value;

        if ($value < $min) {
            $min = $value;
            $minPositions = [$index];
        } elseif ($value == $min) {
            $minPositions[] = $index;
        }

        if ($value > $max) {
            $max = $value;
            $maxPositions = [$index];
        } elseif ($value == $max) {
            $maxPositions[] = $index;
        }
    }

    echo "Total of Odd Elements: $oddSum<br>";
    echo "Total of Even Elements: $evenSum<br>";
    echo "Total of All Elements: $totalSum<br>";
    echo "Minimum Element: $min at positions " . implode(", ", $minPositions) . "<br>";
    echo "Maximum Element: $max at positions " . implode(", ", $maxPositions) . "<br>";
    ?>
</body>
</html>
