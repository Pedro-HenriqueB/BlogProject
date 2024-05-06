<?php
class Dbh {
    private function connect()
    {
        try {
            $username = "thsi_36394630";
            $password = "N?8Mnkvl";
            $dbh = new PDO('mysql:host=sql309.thsite.top;dbname=blogProject', $username, $password);
            return $dbh;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";

        }
    }
}