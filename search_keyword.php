<?php

 
include "db_connect.php";
$keywordfromform = $_GET["keyword"];
echo $keywordfromform;
echo "<h2>Show all jokes with the word chicken </h2>";

$sql = "SELECT QuestionID, Question_question, Question_answer FROM questions_table WHERE Question_question LIKE '%" . $keywordfromform   . "%'";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Question id: " . $row["QuestionID"]. " - ROK Question: " . $row["Question_question"]. " " . $row["Question_answer"]. "<br>";
  }
} else {
  echo "0 results";
}

?>