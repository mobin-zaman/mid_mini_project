<?php

    if(isset($_POST['name']) &&
    isset($_POST['email']) &&
    isset($_POST['username']) &&
    isset($_POST['password']) &&
    isset($_POST['confirmpassword']) &&
    isset($_POST['gender']) &&
        isset($_POST['dd']) && isset($_POST['mm']) && isset($_POST['yy'])
    ) {
        
    } else {
        die("you need to provide all the information");
    }
