<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm-password"];



    if (trim($username) != ""){
        echo "USER username is not empty<br> ";
    }
    else{ echo "user username is empty<br>";
    }
    
    if (trim($email) != ""){
        echo "USER email is not empty<br> ";
    }
    else{ echo "user email is empty<br>";
    }

    if (trim($password) != ""){
        echo "USER password is  not empty<br> ";
    }
    else{ echo "user email is empty<br>";
    }
   
    if (trim($confirm_password) != ""){
        echo "USER email is  not empty<br> ";
    }
    else{ echo "user email is empty<br>";
    }

    if($password == $confirm_password)
{
    //echo "REGISTRATION SUCCESSFUL";
    header("location: demo1.php?success=REGISTRATION SUCCESSFULL");
    exit;
}

else{
    
    //echo "PASSWORD MISMATCH";
    header("location: demo1.php?error=PASSWORD MISMATCH");
    exit;
}

}

?>