<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo "<h1>if else</h1>";
$Age=20;
if($Age>=18)
    echo "adult";
else
    echo "child";
$num=20;
echo "<br>";
echo "<h1>switch case</h1>";
switch($num){
    case 10:
        echo "number is 10";
        break;
    case 20:
        echo "number is 20";
        break;
    default:
        echo "number is not found";
}
echo "<br>";
echo "<h1>while loop</h1>";
$count=1;
while($count<=5){
    echo $count;
    $count++;
}
echo "<br>";
echo "<h1>do while loop</h1>";
do{
    echo $count;
    $count++;
}while($count<=5);
echo "<br>";
echo "<h1>for loop</h1>";
for($count=1;$count<=4;$count++){
    echo $count;
}
echo "<br>";
for($i= 1;$i<=3;$i++){ 
    for($j=1; $j<=5;$j++){
        echo "$i * $j = ".($i*$j)."<br>";
    }
}


for($i=1; $i<=2;$i++){
    for($j=1;$j<=5;$j++){
        echo "row is $i , column is $j result is".($i*$j) . "<br>";
    }
}
?>
    
</body>
</html>