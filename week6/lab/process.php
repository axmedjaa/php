
<?php

require_once "function.php";
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: form.php");
    exit();
}
$fullName = trim($_POST["full_name"] ?? "");
$employeeId = trim($_POST["employee_id"] ?? "");
$gender = $_POST["gender"] ?? "";
$department = $_POST["department"] ?? "";

$basicText = $_POST["basic_salary"] ?? "";
$allowanceText = $_POST["allowance"] ?? "";
$deductionText = $_POST["deduction"] ?? "";
// Validate required information.
$errors = [];
if (empty($fullName)) {
    $errors[] = "Employee full name is required.";
}

if (empty($employeeId)) {
    $errors[] = "Employee ID is required.";
}

if (!isset($_POST["gender"]) || empty($gender)) {
    $errors[] = "Please select a gender.";
}

if (empty($department)) {
    $errors[] = "Please select a department.";
}

if ($basicText === "" || !is_numeric($basicText)
    || (float)$basicText <= 0) {
    $errors[] = "Basic salary must be greater than zero.";
}

if ($allowanceText === "" || !is_numeric($allowanceText)
    || (float)$allowanceText < 0) {
    $errors[] = "Allowance cannot be empty or negative.";
}

if ($deductionText === "" || !is_numeric($deductionText)
    || (float)$deductionText < 0) {
    $errors[] = "Deduction cannot be empty or negative.";
}

// Convert salary values to numbers.
$basicSalary = is_numeric($basicText) ? (float)$basicText : 0;
$allowance = is_numeric($allowanceText) ? (float)$allowanceText : 0;
$deduction = is_numeric($deductionText) ? (float)$deductionText : 0;

// Calculate salaries using the functions.
$grossSalary = calculateGrossSalary($basicSalary, $allowance);
$bonus = calculateBonus($basicSalary);
$netSalary = calculateNetSalary(
    $grossSalary,
    $bonus,
    $deduction
);
$salaryStatus = checkSalaryStatus($netSalary);

// Deduction must not exceed gross salary plus bonus.
if ($deductionText !== "" && is_numeric($deductionText)
    && $deduction > ($grossSalary + $bonus)) {
    $errors[] = "Deduction must not exceed gross salary plus bonus.";
}

// Prepare document upload information.
$uploadedName = "";
$fileType = "";
$fileSize = 0;
$uploadStatus = "Not uploaded";
$destination = "";

if (!isset($_FILES["employee_document"])) {
    $errors[] = "Please select an employee document.";
} elseif ($_FILES["employee_document"]["error"] === UPLOAD_ERR_NO_FILE) {
    $errors[] = "Please select an employee document.";
} elseif ($_FILES["employee_document"]["error"] !== UPLOAD_ERR_OK) {
    $errors[] = "The document upload failed.";
} else {
    $uploadedName = basename($_FILES["employee_document"]["name"]);
    $fileType = $_FILES["employee_document"]["type"];
    $fileSize = (int)$_FILES["employee_document"]["size"];

    // Reject files larger than 2 MB.
    if ($fileSize > 2 * 1024 * 1024) {
        $errors[] = "The document must not exceed 2 MB.";
    }

    $destination = __DIR__ . "/uploads/" . $uploadedName;

    if (file_exists($destination)) {
        $errors[] = "A file with this name already exists. Rename it.";
    }
}

// Upload only if validation has passed.
if (empty($errors)) {
    if (move_uploaded_file(
        $_FILES["employee_document"]["tmp_name"],
        $destination
    )) {
        $uploadStatus = "Uploaded successfully";
    } else {
        $errors[] = "Unable to upload the document.";
        $uploadStatus = "Upload failed";
    }
}

// Escape output to protect the HTML page.
function safeOutput($value)
{
    return htmlspecialchars(
        (string)$value,
        ENT_QUOTES,
        "UTF-8"
    );
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Salary Results</title>
</head>
<body>

<h2>Employee Registration Results</h2>

<?php if (!empty($errors)): ?>

    <h3>Validation Errors</h3>

    <ul>
        <?php foreach ($errors as $error): ?>
            <li><?php echo safeOutput($error); ?></li>
        <?php endforeach; ?>
    </ul>

<?php else: ?>

    <p>Employee registered and document uploaded successfully.</p>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Employee Full Name</th>
            <td><?php echo safeOutput($fullName); ?></td>
        </tr>

        <tr>
            <th>Employee ID</th>
            <td><?php echo safeOutput($employeeId); ?></td>
        </tr>

        <tr>
            <th>Gender</th>
            <td><?php echo safeOutput($gender); ?></td>
        </tr>

        <tr>
            <th>Department</th>
            <td><?php echo safeOutput($department); ?></td>
        </tr>

        <tr>
            <th>Basic Salary</th>
            <td><?php echo number_format($basicSalary, 2); ?></td>
        </tr>

        <tr>
            <th>Allowance</th>
            <td><?php echo number_format($allowance, 2); ?></td>
        </tr>

        <tr>
            <th>Gross Salary</th>
            <td><?php echo number_format($grossSalary, 2); ?></td>
        </tr>

        <tr>
            <th>Bonus</th>
            <td><?php echo number_format($bonus, 2); ?></td>
        </tr>

        <tr>
            <th>Deduction</th>
            <td><?php echo number_format($deduction, 2); ?></td>
        </tr>

        <tr>
            <th>Net Salary</th>
            <td><?php echo number_format($netSalary, 2); ?></td>
        </tr>

        <tr>
            <th>Salary Status</th>
            <td><?php echo safeOutput($salaryStatus); ?></td>
        </tr>

        <tr>
            <th>Uploaded Document Name</th>
            <td><?php echo safeOutput($uploadedName); ?></td>
        </tr>

        <tr>
            <th>File Type</th>
            <td><?php echo safeOutput($fileType); ?></td>
        </tr>

        <tr>
            <th>File Size</th>
            <td><?php echo number_format($fileSize / 1024, 2); ?> KB</td>
        </tr>

        <tr>
            <th>Upload Status</th>
            <td><?php echo safeOutput($uploadStatus); ?></td>
        </tr>
    </table>

<?php endif; ?>

<br>
<a href="form.php">Back to Registration Form</a>

</body>
</html>
