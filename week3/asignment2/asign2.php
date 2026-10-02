<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // 1
    // declares an array of one dimension, initialize
    $numbers = array(5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9);
    // 2
    // Print all elements of the array
    foreach ($numbers as $number) {
        echo $number . ", ";
    }
    echo "<br>";
    // 3) Calculate and print total of all elements 
    $total = 0;
    foreach ($numbers as $number) {
        $total += $number;
    }
    echo "Total: " . $total . "<br>";
    // 4) Calculate and print total of even elements 
    $total = 0;
    foreach ($numbers as $number) {
        if ($number % 2 == 0) {
            $total += $number;
        }
    }
    echo "Total of even elements: " . $total . "<br>";
    // 5) Calculate and print total of odd elements 
    $total = 0;
    foreach ($numbers as $number) {
        if ($number % 2 != 0) {
            $total += $number;
        }
    }
    echo "Total of odd elements: " . $total . "<br>";
    // 6) Find minimum element and its positions
    $min = $numbers[0];
    $positions = array();
    for($i = 0; $i < count($numbers); $i++) {
        if ($numbers[$i] < $min) {
            $min = $numbers[$i];
            $positions = array($i);
        } elseif ($numbers[$i] == $min) {
            $positions[] = $i;
        }
    }
    echo "Minimum element: " . $min . "<br>";
    echo "Positions: " . implode(", ", $positions) . "<br>";
    // 7) Find maximum element and its positions
    $max = $numbers[0];
    $positions = array();
    for($i = 0; $i < count($numbers); $i++) {
        if ($numbers[$i] > $max) {
            $max = $numbers[$i];
            $positions = array($i);
        } elseif ($numbers[$i] == $max) {
            $positions[] = $i;
        }
    }
    echo "Maximum element: " . $max . "<br>";
    echo "Positions: " . implode(", ", $positions) . "<br>";
    // 9 associative array of two dimensions 
    $colors=array(
        "light" => array("red", "green", "blue"),
        "normal"=>array("red", "green", "blue"),
        "dark"  => array("red", "green", "blue")
    );
    echo "<table border='1' style='text-transform: capitalize;' cellpadding='8' cellspacing='0'>";
    echo"<tr style='background-color: #e0e0e0'>";
    echo "<th></th>";
    echo "<th>red</th>";
    echo "<th>green</th>";
    echo "<th>blue</th>";
    echo "</tr>";
    foreach ($colors as $name => $values) {
        echo "<tr>";
        echo "<th style='background-color: #e0e0e0'>" . $name . "</th>";
        foreach ($values as $color) {
            echo "<td>" .$name. " " . $color . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    // 10 associative array of two dimensions 
   $students = array(
    "CA221" => array("Name" => "Mohamed Ahmed Ali", "Phone" => "0648440403", "Address" => "Laba Dhagax, Wardhiigley"),
    "CA223" => array("Name" => "Ahmed Abdi Jama", "Phone" => "0647223201", "Address" => "Taleex, Hodan"),
    "CA221_2" => array("Name" => "Amina Nur Adan", "Phone" => "0646990276", "Address" => "Macmacaanka, Dharkeynley")
);
    echo "<table border='1' style='text-transform: capitalize;' cellpadding='8' cellspacing='0'>";
    echo"<tr style='background-color: #e0e0e0'>";
    echo "<th></th>";
    echo "<th>Name</th>";
    echo "<th>Phone</th>";
    echo "<th>Address</th>";
    echo "</tr>";
    foreach ($students as $code => $values) {
        echo "<tr>";
        echo "<th style='background-color: #e0e0e0'>" . $code . "</th>";
        foreach ($values as $value) {
            echo "<td>" . $value . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
</body>
</html>