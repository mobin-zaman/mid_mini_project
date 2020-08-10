<?php


class createCon
{
    var $host = 'localhost';
    var $user = 'root';
    var $pass = '';
    var $db = 'simple_auth_system';
    var $myconn;

    function connect()
    {
        $con = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
        if (!$con) {
            die('Could not connect to database!');
        } else {
            $this->myconn = $con;
            echo 'Connection established!';
        }
        return $this->myconn;
    }

    function close($myconn)
    {
        mysqli_close($this->$myconn);
        echo 'Connection closed!';
    }

}
