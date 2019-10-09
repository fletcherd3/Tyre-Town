<?php
/*
    $serverName = "132.181.143.31";   //"127.0.0.1";
    $port = "3306";
    $username = "yyh16";
    $password = "QWEr4321"; //"Hwll182_";
    $dbName = "INFO263_19S2_wheel_alignment";
*/

$serverName = "127.0.0.1";
$port = "3306";
$username = "root";
$password = "mysql";
$dbName = "INFO263_19S2_wheel_alignment";

/*
$conn = new mysqli($serverName, $username, $password, $dbName, $port);

if ($conn->connect_error)
{
    fatalError($conn->connect_error);
    return;
}

function getAllItems($conn) {
    if ($conn) {
        $query = "SELECT * FROM owner";
        $result = $conn->query($query);


        $rows = $result->num_rows;
        $items = array();
        echo "<table> <tr> <th> owner_id</th><th>owner_fname</th><th>owner_lname</th><th>owner_phone</th><th>owner_email</th></tr>";
        for ($j = 0; $j < $rows; ++$j) {
            $row = $result->fetch_array(MYSQLI_NUM);
            $items[$j] = $row;
            echo "<tr>";
            for ($i=0; $i < 5; ++$i) {
                echo "<td>".htmlspecialchars($row[$i])."</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
}

function sanitizeInput($input, $conn)
{
    if (get_magic_quotes_gpc()) {
        $input = stripslashes($input);
    }
    $input = $conn->real_escape_string($input);
    return $input;
}

getAllItems($conn);
*/
?>
