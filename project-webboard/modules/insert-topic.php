<?php 

require('../config/config-db.php');

if (isset($_POST['send'])) {
    
    date_default_timezone_set('asia/bangkok'); # function set timezone 
    $topic = $_POST['topic'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $detail = $_POST['detail'];
    $date = date('Y-m-d H:i:s');

    # get detail form mainweb into database
    $sql_q = "INSERT INTO questions(name_q,topic_q,email_q,detail_q,date_q) VALUES('$name' , '$topic' , '$email' , '$detail' , '$date'); ";
    $query_q = mysqli_query($connect,$sql_q);
    if (!$query_q) {
        die('insert into from question fails :::: '.mysqli_error($connect));
    }
        
}

mysqli_close($connect);





?>