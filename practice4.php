<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
</head>
<body>
    <h2>Multiplication Table Generator</h2>
    <form method="post">
        Enter a number: <input type="number" name="number">
        <input type="submit" value="Generate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = intval($_POST["number"]);

        if ($num > 0) {
            echo "<h3>Multiplication Table for $num</h3>";
            echo "<table border='1' cellspacing='0' cellpadding='5'>";

            echo "<tr><th>*</th>";
            for ($i = 1; $i <= $num; $i++) {
                echo "<th>$i</th>";
            }
            echo "</tr>";

            for ($i = 1; $i <= $num; $i++) {
                echo "<tr><th>$i</th>";
                for ($j = 1; $j <= $num; $j++) {
                    echo "<td>" . ($i * $j) . "</td>";
                }
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "<p>Please enter a valid positive number.</p>";
        }
    }
    ?>
</body>
</html>
