<?php
if (!empty("$Username")||!empty("$Password")) {
        header("Location: login.php?Login=Error");
        exit();
    }else{
        // Check if Username Exit
        $sql="SELECT * FROM signup WHERE Username='$Username'";
        $result = $con->_connection->query($sql);
        $resultcheck= $result->num_rows;

        if ($resultcheck < 1) {
            header("Location: login.php?Login=Error");
            exit();
        }else{
            if ($row = $result->fetch_assoc()) {
                //De-hashing The Password
                $Check = password_verify($_POST["Password"],$row['Password']);

                $result->free();
                if ($Check ==false) {
                    header("Location: login.php?Login=Error");
                    exit();
                }elseif ($Check ==True) {
                    // Log User Into The Website



                    print_r($_SESSION['Username'] = $row['Username']
                    $_SESSION['FullName'] = $row['FullName']
                    $_SESSION['Email'] = $row['Email']
                    $_SESSION['log'] = $row['log']
                    $_SESSION['Image'] = $row['Image'])
                    die();
                    
                    header("Location: index.php?Login=Success");

                    

                }
            }
        }
}    
?>