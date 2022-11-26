<html>

<head>

</head>

<body>
<h1>Rok DATABASE MIDTERM QUESTIONS (EDIT) </h1>



<?php

include "db_connect.php";

// include "search_all_questions.php";
?>

<form action="/search_keyword.php">
  vuvedi kluchova duma:<br>
  <input type="text"  name="keyword"><br>
  
  <input type="submit" value="Submit">
</form> 





<?php
//include "search_keyword.php";


$mysqli->close();


?>
</body>


</html>
