<?php

    class Database { //databaseclass

        public static $userconnection; //staticUserConnection

        // Userconectionfunction

        public static function userSetUpConnection () {

            if(!isset((Database::$userconnection))) {

                Database::$userconnection = new mysqli("localhost","root","#@Pasindu12345","neolifesoftwaresoluitions_database","3306");

            }

        }

        // Userconectionfunction

        // insertUpdateDeleteFunction

        public static function iud ($q) {

            Database::userSetUpConnection();
            Database::$userconnection->query($q);

        }

        // insertUpdateDeleteFunction

        // searchFunction

        public static function search ($q) {

            Database::userSetUpConnection();
            $resultset = Database::$userconnection->query($q);
            return $resultset;

        }

        // searchFunction

    }

?>