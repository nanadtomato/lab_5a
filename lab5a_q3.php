<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3 - Multiplication Table</title>
    
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
<h1> Multiplication Table</h1>
    <?php

    function multiplication($multiplier) {
        $results = [];
        for ($i = 1; $i <= 12; $i++) {
            $results[] = [
                'no' => $i,
                'multiplier' => $multiplier,
                'answer' => $i * $multiplier
            ];
        }
        return $results;
    }

    $tableData = multiplication(2);
    ?>

    <table>
        <tr>
            <th>No</th>
            <th>Multiplier</th>
            <th>Answer</th>
        </tr>
        <?php foreach ($tableData as $row): ?>
        <tr>
            <td><?php echo $row['no']; ?></td>
            <td><?php echo $row['multiplier']; ?></td>
            <td><?php echo $row['answer']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
