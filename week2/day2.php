<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h1>numberic array</h1>";
    $names=array();
    $names[0]="ahmed";
    $names[1]="cali";
    $names[2]=5;
    echo $names[0]. "<br>";
    var_dump($names);
    echo "<pre>";
    print_r($names);
     echo "</pre>";
    echo "<pre>";
    var_dump($names);
     echo "</pre>";
    for($i=0;$i<count($names);$i++){
        echo $names[$i]. "<br>";
    }
    echo "<h1>assosiative array</h1>";
    $info=array(
        "id"=>1,
        "name"=>"ahmed",
        "age"=>20,
        "address"=>"cairo",
        "status"=>"single",
        "weight"=>70.5
    );
    echo "<pre>";
    print_r($info);
    echo "</pre>";
    echo $info["name"]. "<br>";
    echo $info["age"]. "<br>";
    foreach($info as $key => $value){
        echo $key. ": ".$value. "<br>";
    }
    ?>
</body>
</html>