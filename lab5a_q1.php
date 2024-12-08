<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q1</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #C3B1E1;
            color: #333;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        table {
            margin: 50px auto;
            border-collapse: collapse;
            width: 70%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            background-color: #fff;
        }
        th, td {
            padding: 12px 20px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #A020F0;
            color: white;
            text-transform: uppercase;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        h1 {
            margin: 20px 0;
            color: #A020F0;
        }
    </style>
</head>
<body>
    <h1>Lab 5a: Personal Details</h1>
    <?php  
        $name = "Nurul Nadia Husna Binti Anuar"; 
        $matric_number = "AI220157";
        $course = "Software Engineering";
        $year_of_study = 3;
        $address = "Hulu Langat, Selangor";
    ?> 
    <table>
        <tr>
            <th>Detail</th>
            <th>Information</th>
        </tr>
        <tr>
            <td>Name</td>
            <td><?php echo $name; ?></td>  
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo $matric_number; ?></td>  
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo $course; ?></td>  
        </tr>
        <tr>
            <td>Year of Study</td>
            <td><?php echo $year_of_study; ?></td>  
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>  
        </tr>
    </table>
</body>
</html>
