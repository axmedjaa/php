# 1. Numeric Array

## Description

This example demonstrates how to create and use a **numeric array** in PHP.

A numeric array stores values using numeric indexes such as `0`, `1`, `2`, and so on.

Main concepts covered:

* `array()` creates an array.
* `$names[0]`, `$names[1]`, and `$names[2]` store values using numeric indexes.
* Array indexes start from `0`.
* `echo` displays a specific array value.
* `var_dump()` displays detailed information about the array, including data types and values.
* `print_r()` displays the contents of an array in a readable format.
* `count()` returns the number of elements in the array.
* A `for` loop can be used to access every element of a numeric array.
* `$names[$i]` accesses the array element at the current index.

Example Code:

```php
<?php

echo "<h1>Numeric Array</h1>";

$names = array();

$names[0] = "ahmed";
$names[1] = "cali";
$names[2] = 5;

echo $names[0] . "<br>";

var_dump($names);

echo "<pre>";
print_r($names);
echo "</pre>";

echo "<pre>";
var_dump($names);
echo "</pre>";

for ($i = 0; $i < count($names); $i++) {
    echo $names[$i] . "<br>";
}

?>
```

---

# 2. Associative Array

## Description

This example demonstrates how to create and use an **associative array** in PHP.

An associative array stores values using named keys instead of numeric indexes.

Main concepts covered:

* `array()` creates an array.
* Associative arrays use `key => value` pairs.
* `"id" => 1` stores the value `1` using the key `"id"`.
* `"name" => "ahmed"` stores the name using the key `"name"`.
* Array values can have different data types.
* `$info["name"]` accesses a value using its key.
* `$info["age"]` accesses the value stored under the `"age"` key.
* `print_r()` displays the contents of the associative array.
* `foreach` can be used to loop through all keys and values.
* `$key` stores the current array key.
* `$value` stores the value associated with the current key.

Example Code:

```php
<?php

echo "<h1>Associative Array</h1>";

$info = array(
    "id" => 1,
    "name" => "ahmed",
    "age" => 20,
    "address" => "cairo",
    "status" => "single",
    "weight" => 70.5
);

echo "<pre>";
print_r($info);
echo "</pre>";

echo $info["name"] . "<br>";
echo $info["age"] . "<br>";

foreach ($info as $key => $value) {
    echo $key . ": " . $value . "<br>";
}

?>
```

---

# 3. Accessing Array Elements

## Description

This example demonstrates how to access individual elements from an array.

Main concepts covered:

* Numeric arrays use numeric indexes.
* The first array element has index `0`.
* `$names[0]` accesses the first element.
* `$names[1]` accesses the second element.
* `$names[2]` accesses the third element.
* Associative arrays use named keys.
* `$info["name"]` accesses the value stored under the `"name"` key.
* `$info["age"]` accesses the value stored under the `"age"` key.

Example Code:

```php
<?php

$names = array(
    "ahmed",
    "cali",
    5
);

echo $names[0] . "<br>";
echo $names[1] . "<br>";
echo $names[2] . "<br>";

$info = array(
    "id" => 1,
    "name" => "ahmed",
    "age" => 20
);

echo $info["name"] . "<br>";
echo $info["age"] . "<br>";

?>
```

---

# 4. print_r() Function

## Description

This example demonstrates using the `print_r()` function to display the contents of an array.

Main concepts covered:

* `print_r()` displays arrays in a readable format.
* It is useful for inspecting array contents.
* `<pre>` makes the output easier to read in the browser.
* `print_r()` can display both numeric and associative arrays.

Example Code:

```php
<?php

$names = array(
    "ahmed",
    "cali",
    5
);

echo "<pre>";
print_r($names);
echo "</pre>";

$info = array(
    "id" => 1,
    "name" => "ahmed",
    "age" => 20
);

echo "<pre>";
print_r($info);
echo "</pre>";

?>
```

---

# 5. var_dump() Function

## Description

This example demonstrates using the `var_dump()` function to display detailed information about an array.

Main concepts covered:

* `var_dump()` displays the data type of each value.
* It displays the value stored in each array element.
* It also shows the number of elements in the array.
* It is useful for debugging PHP code.
* `var_dump()` can display different data types such as strings, integers, and floating-point numbers.

Example Code:

```php
<?php

$names = array(
    "ahmed",
    "cali",
    5
);

echo "<pre>";
var_dump($names);
echo "</pre>";

?>
```

---

# 6. count() Function

## Description

This example demonstrates using the `count()` function to determine the number of elements in an array.

Main concepts covered:

* `count()` returns the number of elements in an array.
* `count($names)` returns the total number of elements in `$names`.
* `count()` is commonly used with `for` loops.
* The loop continues while `$i` is smaller than the number of elements.

Example Code:

```php
<?php

$names = array(
    "ahmed",
    "cali",
    5
);

echo "Number of elements: " . count($names);

?>
```

---

# 7. foreach Loop with Associative Array

## Description

This example demonstrates using a `foreach` loop to access every key and value in an associative array.

Main concepts covered:

* `foreach` loops through every element of an array.
* `$key` stores the current key.
* `$value` stores the value associated with the current key.
* `$key => $value` allows both the key and value to be accessed.
* The loop continues until all elements have been processed.

Example Code:

```php
<?php

$info = array(
    "id" => 1,
    "name" => "ahmed",
    "age" => 20,
    "address" => "cairo",
    "status" => "single",
    "weight" => 70.5
);

foreach ($info as $key => $value) {
    echo $key . ": " . $value . "<br>";
}

?>
```

---

# 8. Complete PHP Arrays Example

## Description

This example combines the main PHP array concepts demonstrated above into one PHP program.

Main concepts covered:

* Numeric arrays
* Associative arrays
* Array indexes
* Array keys
* `echo`
* `print_r()`
* `var_dump()`
* `count()`
* `for` loop
* `foreach` loop
* Accessing array values
* Key-value pairs
* Different data types

Example Code:

```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Arrays</title>
</head>
<body>

<?php

echo "<h1>Numeric Array</h1>";

$names = array();

$names[0] = "ahmed";
$names[1] = "cali";
$names[2] = 5;

echo $names[0] . "<br>";

echo "<h2>var_dump()</h2>";

echo "<pre>";
var_dump($names);
echo "</pre>";

echo "<h2>print_r()</h2>";

echo "<pre>";
print_r($names);
echo "</pre>";

echo "<h2>Using For Loop</h2>";

for ($i = 0; $i < count($names); $i++) {
    echo $names[$i] . "<br>";
}

echo "<h1>Associative Array</h1>";

$info = array(
    "id" => 1,
    "name" => "ahmed",
    "age" => 20,
    "address" => "cairo",
    "status" => "single",
    "weight" => 70.5
);

echo "<h2>print_r()</h2>";

echo "<pre>";
print_r($info);
echo "</pre>";

echo "<h2>Accessing Values</h2>";

echo $info["name"] . "<br>";
echo $info["age"] . "<br>";

echo "<h2>Using Foreach Loop</h2>";

foreach ($info as $key => $value) {
    echo $key . ": " . $value . "<br>";
}

?>

</body>
</html>
```
