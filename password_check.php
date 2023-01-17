<?php
    if(isset($_POST['password'])){
        $password = $_POST['password'];
        if($password === "123"){
            header("Location: page.html");
            exit();
        }else{
            echo "Incorrect password. Please try again.";
        }
    }
?>
