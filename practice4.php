<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=.5">
    <title>Multiplication Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 10%;
            margin-top: 5px;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Multiplication Table</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the size of the multiplication table
        $size = intval($_POST["size"]);

        // Check if size is valid
        if ($size > 0) {
            echo "<table>";
            // Header row
            echo "<tr><th></th>";
            for ($i = 1; $i <= $size; $i++) {
                echo "<th>$i</th>";
            }
            echo "</tr>";

            // Table rows
            for ($i = 1; $i <= $size; $i++) {
                echo "<tr><th>$i</th>";
                for ($j = 1; $j <= $size; $j++) {
                    echo "<td>" . ($i * $j) . "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p>Please enter a positive integer for the size of the table.</p>";
        }
    }
    ?>
</body>
</html>