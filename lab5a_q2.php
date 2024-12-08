<!DOCTYPE html>
<html lang="en">
<head>
    <title>Students Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
            text-align: center;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<h1> Students Details</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Program</th>
            <th>Age</th>
        </tr>
        <?php
        $students = [
            ['name' => 'Alice', 'program' => 'BIP', 'age' => 21],
            ['name' => 'Bob', 'program' => 'BIS', 'age' => 20],
            ['name' => 'Raju', 'program' => 'BIT', 'age' => 22]
        ];

        foreach ($students as $student) {
            echo "<tr>";
            echo "<td>" . $student['name'] . "</td>";
            echo "<td>" . $student['program'] . "</td>";
            echo "<td>" . $student['age'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
