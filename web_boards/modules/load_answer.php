<?php


    $output = '';
    if(!empty($_POST['userhidden'])) {
        require_once('../database/config-db.php'); require_once('../modules/direction-sql.php');
        $obj_db = new Database_connect(); $obj_dsql = new Using_direct_sql();
        $connect = $obj_db->open_database();
        $result_select_id_answer = $obj_dsql->select_table_answer($connect, $_POST['userhidden']);

        if (mysqli_num_rows($result_select_id_answer) > 0) {
            while ($data = mysqli_fetch_array($result_select_id_answer)) {
                $output .= '
                    <div id="result-answer">
                    <table class="table">
                        <tr class="text-center"><th>Answer Order ' . $data['id'] . '</th></tr>
                        <tbody>
                        <tr><td>nickname is ' . $data['username'] . '</td></tr>
                        <tr><td>email ' . $data['useremail'] . '</td></tr>
                        <tr><td>answer details on below<p><br> ' . $data['userdetails'] . '</p></td></tr>
                        </tbody>
                    
                    </table>
                    </div>
                    ';
            }
        }
    }

    echo json_encode($output);


?>