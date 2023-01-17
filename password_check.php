<?php
    if(isset($_POST['password'])){
        $password = $_POST['password'];
        if($password === "123"){
            $url = 'https://whiteslashdev.github.io/page.html';
            header("Location: $url");
            exit();
        }else{
            echo "Incorrect password. Please try again.";
        }
    }
?>
