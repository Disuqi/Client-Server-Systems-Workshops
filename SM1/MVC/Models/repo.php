<?php
echo "<h1>mySQL DB connection test</h1>";
$host = 'poseidon.salford.ac.uk';
$dbName = 'age520';
$user = 'age520';
$pass = 'mySql';

$dbHandle = new PDO("mysql:host=$host;dbname=$dbName", "age520", "mySql");
$sqlQuery = "SELECT * FROM students";
echo $sqlQuery;

$statement = $dbHandle->prepare($sqlQuery);
$statement->execute();

echo "<table border='1'>";
while($row = $statement->fetch()){
    echo "<tr><td>" . $row[0] ."</td><td>". $row[1] . "</td><td>" . $row[2] . "</td><td>" . $row[3];
}


echo "</table>";
$dbHandle = null;