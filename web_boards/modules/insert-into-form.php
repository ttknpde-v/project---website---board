<?php


    $result = ''; $alert = ''; $view_board = ''; $message = array();
    if( !empty($_POST['username']) && !empty($_POST['usertopic']) && !empty($_POST['useremail']) && !empty($_POST['userdetails'])) {
        $username = $_POST['username']; $usertopic = $_POST['usertopic']; $useremail = $_POST['useremail']; $userdetails = $_POST['userdetails'];
        require_once('../database/config-db.php'); require_once ('../modules/direction-sql.php');
        $obj_DB = new Database_connect(); $obj_DSQL = new Using_direct_sql();
        $connect = $obj_DB->open_database(); // open database

        if(stristr($_POST['username'] , "'" ) || stristr($_POST['usertopic'] , "'" ) || stristr($_POST['useremail'] , "'" ) || stristr($_POST['userdetails'] ,"'") ) {
            // find single quote by stristr(variable , "word");

            $username = str_replace("'" , "\'" ,$_POST['username']);
            $usertopic = str_replace("'" , "\'" ,$_POST['usertopic']);
            $useremail = str_replace("'" , "\'" ,$_POST['useremail']);
            $userdetails = str_replace("'" , "\'" ,$_POST['userdetails']);
            // replace word by str_replace("word","word replace",variable)

        }

        $result = $obj_DSQL->insert_into($connect,$username,$usertopic,$useremail,$userdetails);

        if(empty($result)) {
            $result = true;
            $alert .= '<span class="text-success">comment complete!</span>';
            $view_board .= '<a class="btn btn-primary mt-4" href="../interface/all-boards.php">view your boards</a>';
        }

        $obj_DB->close_database($connect); // close db
    }
    else {
        $result = false;
        $alert .= ' <span class="text-danger">comment failed!</span> ';
    }

    $message = [

      'results' => $result ,  // return json เป็นตัวแปร
      'alerts' => $alert ,
      'view_board' => $view_board

    ];

    echo json_encode($message); // echo เพื่อ return json


?>