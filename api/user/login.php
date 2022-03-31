<?php

include_once('connection.php');

userLogin();

function userLogin() {
    if($_POST && $_POST['email'] && $_POST['password'] && strlen($_POST['password'])>0 && strlen($_POST['email'])>0){

        $sql = "SELECT * FROM user WHERE user.email='".$_POST['email']."';";
    
        $conn = connectDB();
    
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
            header("Location: /dashboard");
        }else{
            echo('
            <div class="generated-center" style="display: flex; align-items: center; justify-content: center">
                <p style="display: block; text-align: center; width: fit-content; min-width: 50%; height: 100%; float: center; background-color: red; opacity: 0.75; color: white; font-family: "Times New Roman", Times, serif;">Unregistered user</p>
            </div>
            ');
        }

    }
}





?>