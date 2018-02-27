<?php

$name = $_GET["name"];

// Use the database
require("dbConnect.php");
$db = get_db();

// Prepare the statement
$query = "SELECT robot_input FROM robots WHERE robot_name = '$name'";
$statement = $db->prepare($query);
$statement->execute();

while ($row = $statement->fetch(PDO::FETCH_ASSOC))
{
    echo $row["robot_input"];
}

?>