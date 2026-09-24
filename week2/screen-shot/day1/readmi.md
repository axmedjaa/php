# 1. If Else Statement

## Description

This example demonstrates using the `if` and `else` statements to make a decision based on a condition.

Main concepts covered:

* `if` checks whether a condition is true.
* `else` runs when the `if` condition is false.
* `$Age = 20` creates a variable named `$Age` and stores the value `20`.
* `>=` means greater than or equal to.
* Since `20 >= 18` is true, PHP outputs `adult`.

Example Code:

```php
<?php

$Age = 20;

if ($Age >= 18) {
    echo "adult";
} else {
    echo "child";
}

?>
```

---

# 2. Switch Case Statement

## Description

This example demonstrates using the `switch` statement to compare one variable against multiple possible values.

Main concepts covered:

* `switch($num)` checks the value stored in `$num`.
* `case` defines a possible matching value.
* `break` stops the switch after a matching case is found.
* `default` runs when none of the cases match.
* Since `$num` is `20`, the second case is executed.

Example Code:

```php
<?php

$num = 20;

switch ($num) {
    case 10:
        echo "number is 10";
        break;

    case 20:
        echo "number is 20";
        break;

    default:
        echo "number is not found";
}

?>
```

---

# 3. While Loop

## Description

This example demonstrates repeating a block of code using a `while` loop.

Main concepts covered:

* `$count = 1` initializes the counter.
* `while` continues executing as long as the condition is true.
* `$count <= 5` means the loop continues while the value is less than or equal to 5.
* `$count++` increases the value of `$count` by 1 after each iteration.
* The loop prints the numbers from 1 to 5.

Example Code:

```php
<?php

$count = 1;

while ($count <= 5) {
    echo $count . "<br>";
    $count++;
}

?>
```

---

# 4. Do While Loop

## Description

This example demonstrates the `do while` loop, which executes the code first and checks the condition afterward.

Main concepts covered:

* `do` contains the code that should execute.
* `while` checks the condition after the code has executed.
* A `do while` loop always executes at least once.
* `$count++` increases the counter by 1.
* The condition `$count <= 5` determines whether the loop continues.

Example Code:

```php
<?php

$count = 1;

do {
    echo $count . "<br>";
    $count++;
} while ($count <= 5);

?>
```

---

# 5. For Loop

## Description

This example demonstrates using a `for` loop to repeat code a specific number of times.

Main concepts covered:

* `$count = 1` initializes the counter.
* `$count <= 4` is the condition that controls the loop.
* `$count++` increases the counter by 1 after every iteration.
* The loop prints the numbers from 1 to 4.

The `for` loop contains three main parts:

* Initialization: `$count = 1`
* Condition: `$count <= 4`
* Increment: `$count++`

Example Code:

```php
<?php

for ($count = 1; $count <= 4; $count++) {
    echo $count . "<br>";
}

?>
```

---

# 6. Nested For Loop

## Description

This example demonstrates a nested `for` loop, where one `for` loop is placed inside another `for` loop.

Main concepts covered:

* The outer loop uses `$i`.
* The inner loop uses `$j`.
* The inner loop executes completely for every iteration of the outer loop.
* `$i * $j` calculates the multiplication result.
* The example creates a multiplication table from 1 to 3 and 1 to 5.

Example Code:

```php
<?php

for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        echo "$i * $j = " . ($i * $j) . "<br>";
    }
}

?>
```

---

# 7. Rows and Columns Using Nested Loops

## Description

This example demonstrates how nested loops can be used to represent rows and columns.

Main concepts covered:

* The outer loop represents the rows.
* The inner loop represents the columns.
* `$i` stores the current row number.
* `$j` stores the current column number.
* `$i * $j` calculates the result for each row and column.
* The outer loop creates 2 rows.
* The inner loop creates 5 columns for each row.

Example Code:

```php
<?php

for ($i = 1; $i <= 2; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        echo "row is $i, column is $j result is " . ($i * $j) . "<br>";
    }
}

?>
```

---

# 8. Complete PHP Control Statements Example

## Description

This example combines the main PHP control statements demonstrated above into one PHP program.

Main concepts covered:

* `if else`
* `switch case`
* `while`
* `do while`
* `for`
* Nested `for` loops
* Rows and columns
* Variables
* Conditions
* Increment operators
* String concatenation

Example Code:

```php
<?php

echo "<h1>If Else</h1>";

$Age = 20;

if ($Age >= 18) {
    echo "adult";
} else {
    echo "child";
}

echo "<br>";

echo "<h1>Switch Case</h1>";

$num = 20;

switch ($num) {
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

echo "<h1>While Loop</h1>";

$count = 1;

while ($count <= 5) {
    echo $count . "<br>";
    $count++;
}

echo "<h1>Do While Loop</h1>";

$count = 1;

do {
    echo $count . "<br>";
    $count++;
} while ($count <= 5);

echo "<h1>For Loop</h1>";

for ($count = 1; $count <= 4; $count++) {
    echo $count . "<br>";
}

echo "<h1>Nested For Loop</h1>";

for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        echo "$i * $j = " . ($i * $j) . "<br>";
    }
}

echo "<h1>Rows and Columns</h1>";

for ($i = 1; $i <= 2; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        echo "row is $i, column is $j result is " . ($i * $j) . "<br>";
    }
}

?>
```
