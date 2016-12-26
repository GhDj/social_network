<?php
/**
 * Created by PhpStorm.
 * User: ghdj9
 * Date: 24/12/2016
 * Time: 01:47
 */

//namespace App;


class Connect
{
    var $host = 'localhost';
    var $user = 'root';
    var $pass = '';
    var $db = 'base';
    var $myconn;

    function connect() {
        $con = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
        if (!$con) {
            die('Could not connect to database!');
        } else {
            $this->myconn = $con;
            echo 'Connection established!';}
        return $this->myconn;
    }

    function close($myconn) {
        mysqli_close($myconn);
        echo 'Connection closed!';
    }
}