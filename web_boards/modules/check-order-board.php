<?php

    error_reporting(0);
    if(!empty($_GET['id'])) {
        require_once ('../database/config-db.php'); require_once ('../modules/direction-sql.php');
        $obj_db = new Database_connect(); $obj_dsql = new Using_direct_sql();
        $connect = $obj_db->open_database();
        $result_select_id = $obj_dsql->select_table_id($connect,$_GET['id']);
        $obj_dsql->update_table($connect,$_GET['id']);
        $data_select = mysqli_fetch_array($result_select_id);
    }


?>

