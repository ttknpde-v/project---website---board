<?php

    class Database_connect {

        private $host_server = "127.0.0.1";
        private $user_name = "thitikorn_db";
        private $password = "Architecture.890.098";
        private $database_name = "websiteboards";
        private $port = "3307";


        public function open_database() {
            $open = mysqli_connect($this->host_server,$this->user_name,$this->password,$this->database_name,$this->port);
            if(!$open) {
                die('connect database is failed'.mysqli_connect($open));
            }
            else {
                return $open;
            }
        }


        public function close_database($connect) {
            $connect->close();
        }
    }



?>