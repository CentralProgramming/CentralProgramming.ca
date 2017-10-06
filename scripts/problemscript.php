<?php
require_once "../private/sql-bits.php";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
    echo("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM leaderboard ORDER BY score DESC";
$result = $conn->query($sql);

if($result->num_rows >0){
    while($row = $result->fetch_assoc()){
        $user[] = $row["user"];
        $points[] = $row["score"];
    }
}

$sql = "SELECT * FROM past_probs ORDER BY ID DESC";
$result = $conn->query($sql);

if($result->num_rows >0){
    while($row = $result->fetch_assoc()){
        $date[] = $row["Prob_Date"];
        $name[] = $row["Name"];
        $url[] = $row["URL"];
        $points[] = $row["Points"];
        $limit[] = $row["Time_Limit"];
        $author[] = $row["Author"];
        $description[] = $row["Description"];
        $top[] = $row["Top_Score"];
    }
}

$conn->close();
?>