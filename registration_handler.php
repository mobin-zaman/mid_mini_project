<?php


include ('db_connection.php');

if($_REQUEST['method'] == 'POST') {
    if (isset($_POST['name']) &&
        isset($_POST['email']) &&
        isset($_POST['username']) &&
        isset($_POST['password']) &&
        isset($_POST['confirmpassword']) &&
        isset($_POST['gender']) &&
        isset($_POST['dd']) && isset($_POST['mm']) && isset($_POST['yy'])
    ) {

        signup($_POST['name'], $_POST['email'], $_POST['username'], $_POST['password'], $_POST['confirmpassword'], $_POST['gender'], $_POST['dd'], $_POST['yy'], $_POST['mm']);


    } else {
        die("you need to provide all the information");
    }
}


    function signup($name, $email, $username, $password,$confirmpassword, $gender, $dd, $mm, $yy) {
        $connection = new createCon();
        $connection->connect();

        $query = "insert into user values (?,?,?,?,?,?,?)";
        $stmt = $connection->prepare($query);
        $stmt->bind_param("sssssss", $name, $email, $username, $password, $confirmpassword, $gender, $dd.$mm.$yy);
        $stmt->execute();
    }
