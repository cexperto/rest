<?php
    class db{
        // Properties
        private $dbhost = 'remotemysql.com';
        private $dbuser = '8mqwQQoY2v';
        private $dbpass = 'AzMbpcQOUt';
        private $dbname = '8mqwQQoY2v';

        // Connect
        public function connect(){
            $mysql_connect_str = "mysql:host=$this->dbhost;dbname=$this->dbname";
            $dbConnection = new PDO($mysql_connect_str, $this->dbuser, $this->dbpass);
            $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $dbConnection;
        }
    }
