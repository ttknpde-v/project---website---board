<?php

    $result = ''; $alert = '';  $data = array();
    if( (!empty($_POST['username'])) && (!empty($_POST['useremail'])) && (!empty($_POST['userdetails'])) && (!empty($_POST['userhidden']))) {
        $username = $_POST['username']; $useremail = $_POST['useremail']; $userdetails = $_POST['userdetails']; $id = $_POST['userhidden'];
        require_once('../database/config-db.php'); require_once ('../modules/direction-sql.php');
        $obj_DB = new Database_connect(); $obj_DSQL = new Using_direct_sql();
        $connect = $obj_DB->open_database(); // open database

        if(stristr($_POST['username'] , "'" ) || stristr($_POST['useremail'] , "'" ) || stristr($_POST['userdetails'] ,"'") ) {
            // find single quote by stristr(variable , "word");

            $username = str_replace("'" , "\'" ,$_POST['username']);
            $useremail = str_replace("'" , "\'" ,$_POST['useremail']);
            $userdetails = str_replace("'" , "\'" ,$_POST['userdetails']);
            // replace word by str_replace("word","word replace",variable)

        }

        $result = $obj_DSQL->insert_into_answer($connect,$username,$useremail,$userdetails,$id);
        $obj_DSQL->update_table_answer($connect,$id);
        if(empty($result)) {
            $result = true;
            $alert .= '<span class="text-success">answer complete!</span>';
        }
    }
    else {
        $result = false;
        $alert .= '<span class="text-danger">answer failed!</span>';
    }

    $data = [ 'result' => $result ,  'alert' => $alert ];

    echo json_encode($data);


?>