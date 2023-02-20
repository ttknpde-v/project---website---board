<?php

    class Using_direct_sql {

        public function insert_into ($connect , $username,$usertopic ,$useremail ,$userdetails) {
            $obj_Using = new Using_direct_sql();
            date_default_timezone_set('Asia/Bangkok');
            $current = date("Y-m-d H:i:s");

            $into = "insert into questions(username,usertopic,useremail,userdetails,datetime)".
            "values('$username','$usertopic','$useremail','$userdetails','$current');";
             $obj_Using->query_direct($connect,$into);

        }

        public function insert_into_answer ($connect , $username,$useremail ,$userdetails , $id) {
            $obj_Using = new Using_direct_sql();

            $into = "insert into answers(username,useremail,userdetails,idques)".
                "values('$username','$useremail','$userdetails','$id');";
            $obj_Using->query_direct($connect,$into);

        }

        public function query_direct ($connect , $sql) {
            $result = mysqli_query($connect,$sql);
            if(!$result) {
                die('query is failed '.mysqli_error($connect));
            }
            else {
                return $result;
            }

        }


        public function select_table ($connect) {
            $obj_Using = new Using_direct_sql();
            $select = "select * from questions;";
            return $result = $obj_Using->query_direct($connect,$select);
        }

        public function select_table_id ($connect , $id) {
            $obj_Using = new Using_direct_sql();
            $select = "select * from questions where no like '$id';";
            return $result = $obj_Using->query_direct($connect,$select);
        }
        public function select_table_answer ($connect , $id) {
            $obj_Using = new Using_direct_sql();
            $select = "select * from answers where idques like $id order by id desc ;";
            return $result = $obj_Using->query_direct($connect,$select);
        }


        public function update_table ($connect , $id) {
            $obj_Using = new Using_direct_sql();
            $select = "update questions set view = view+1 where no like '$id';";
            return $result = $obj_Using->query_direct($connect,$select);
        }

        public function update_table_answer ($connect , $id) {
            $obj_Using = new Using_direct_sql();
            $select = "update questions set answer = answer+1 where no like '$id';";
            $result = $obj_Using->query_direct($connect,$select);
        }

    }


?>