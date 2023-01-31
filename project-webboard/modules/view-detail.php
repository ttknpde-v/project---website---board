<?php 

require('../config/config-db.php');

error_reporting(0); 
# function turn off all error , warning
# error_reporting(..level..)  

$ID = $_GET['ID'];
if ($ID != NULL) {

    #เลือกคำถามจากตาราง questions ฟิลด์ id ที่ส่งมา
    $sql_q = "SELECT * FROM questions WHERE id ='$ID'; ";
    $query_q = mysqli_query($connect,$sql_q);
    if(!$query_q) {
        die('select from questions fails :::: '.mysqli_error($connect));
    }
    // $rows_q = mysqli_num_rows($query_q); # mysqli_num_rows function return rows in table db
    $result_q = mysqli_fetch_assoc($query_q);

    #เลือกคำถามจากตาราง answers ฟิลด์ id ที่ส่งมา
    $sql_a = "SELECT * FROM answers WHERE question_id_a ='$ID'; ";
    $query_a = mysqli_query($connect,$sql_a);
    if(!$query_a) {
        die('select from answers fails :::: '.mysqli_error($connect));
    }
    $rows_a = mysqli_num_rows($query_a);

    
    
    $sql_update = "UPDATE questions SET view_q = view_q+1 WHERE id='$ID';";
    $query_update = mysqli_query($connect,$sql_update);
    if(!$query_update) {
        die('update from questions fails :::: '.mysqli_error($connect));
    }

}




if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    # echo $_SERVER['HTTP_HOST']; HTTP_HOST it returns IP servers ex. 127.0.0.1:8081
    # echo $_SERVER['SERVER_NAME']; SERVER_NAME it return IP ex. 127.0.0.1
    # echo $_SERVER['SCRIPT_NAME']; SCRIPT_NAME it return path

    $author = $_POST['author'];
    $email = $_POST['email'];
    $detail = $_POST['detail'];
    
    #into table answers
    $sql_answers = "INSERT INTO answers(name_a,email_a,detail_a,question_id_a) VALUES('$author','$email','$detail','$ID'); ";
    $query_answers = mysqli_query($connect,$sql_answers);
    if(!$query_answers) {
        die('insert into from answers fails :::: '.mysqli_error($connect));
    }

    #update table questions
    $sql_update = "UPDATE questions SET reply_q = reply_q + 1 WHERE id ='$ID'; ";
    $query_update = mysqli_query($connect,$sql_update);
    if (!$query_update) {
        die('update from questions fails :::: '.mysqli_error($connect));
    }


}


mysqli_close($connect);


?>