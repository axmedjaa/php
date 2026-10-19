
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Registration System</title>
    <style>
         body {
            min-height: 100vh;
            background: #f1f5f9;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 30px 15px;
        }
        .container {
            width: 100%;
            max-width: 850px;
            background: #ffffff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 35px rgba(15, 23, 42, 0.08);
        }
    </style>
</head>
<body>
    <h2>Employee Registration Form</h2>
    <form action="process.php" method="POST"
          enctype="multipart/form-data" >
        <label>Employee Full Name:</label>
        <input type="text" name="full_name" required>
        <br><br>

        <label>Employee ID:</label>
        <input type="text" name="employee_id" required>
        <br><br>

        <label>Gender:</label>
        <input type="radio" name="gender" value="Male" required> Male
        <input type="radio" name="gender" value="Female"> Female
        <br><br>

        <label>Department:</label>
        <select name="department" required>
            <option value="">Select Department</option>
            <option value="Human Resources">Human Resources</option>
            <option value="Finance">Finance</option>
            <option value="Information Technology">Information Technology</option>
            <option value="Administration">Administration</option>
        </select>
        <br><br>

        <label>Basic Salary:</label>
        <input type="number" name="basic_salary"
               min="0.01" step="0.01" required>
        <br><br>

        <label>Allowance:</label>
        <input type="number" name="allowance"
               min="0" step="0.01" required>
        <br><br>

        <label>Deduction:</label>
        <input type="number" name="deduction"
               min="0" step="0.01" required>
        <br><br>

        <label>Employee Document:</label>
        <input type="file" name="employee_document" required>
        <br><br>

        <button type="submit">Register and Calculate</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>
