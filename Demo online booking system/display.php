<?php 
require_once 'connect.php';

$selectUsers ="SELECT user_name, Name,contact, address FROM customerDetails_tbl";

$result = $connect->query($selectUsers);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cruise Travel Agency</title>
    <style>
        table {
            width: 60%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h2>All available users</h2>
    <table>
        <thead>
            <tr>
                <th> user Name</th>
                <th>Name</th>
                <th>contact</th>
                <th>address</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>".$row["user_name"]."</td><td>".$row["Name"]."</td><td>".$row["contact"]."</td><td>".$row["address"]."</td></tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No users found</td></tr>";
            }
            ?>
        </tbody>
    </table>

<?php
$connect->close();
?>
</body>
</html>