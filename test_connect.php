<?php

    include ('connection.php');

    $connection = new createConnection(); //i created a new object

    $connection->connectToDatabase(); // connected to the database

    echo "<br />"; // putting a html break

    $connection->selectDatabase();// closed connection

    echo "<br />";

    $connection->select("Select * From cadeaux",2);
    $connection->closeConnection();
?>