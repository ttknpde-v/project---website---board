<?php 

require('../config/config-db.php');

$sql_q = "SELECT * FROM questions ; ";
$query_q = mysqli_query($connect,$sql_q);
if (!$query_q) {

    die('select id from questions fails :::: '.mysqli_error($connect));

}




mysqli_close($connect);

?>