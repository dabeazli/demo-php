<?php

// ako ima greshka pokazva
if ($mysqli->connect_errno) {
	echo "MySQL Connection Failed";
} 
echo $mysqli->host_info . "\n";
//ako ima neshto pokazva
$sql = "SELECT QuestionID, Question_question, Question_answer FROM questions_table";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["QuestionID"]. " - ROK Question: " . $row["Question_question"]. " " . $row["Question_answer"]. "<br>";
  }
} else {
  echo "0 results";
}


?>