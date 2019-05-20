<?php
include_once "include/Database.php";
$con = new Database();

session_start();
?>

<?php

    //$insert = $con->insert($table, $coloumn1, $coloumn2, $coloumn3, $coloumn4);

	

	//$Password = password_hash($Password, PASSWORD_DEFAULT);
	
	if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['Submit'])) {

        $FullName = $_POST['FullName'];
        $Username = $_POST['Username'];
        $Email = $_POST['Email'];
        $Password = $_POST['Password'];
        $Access = $_POST['Access'];

        $image = $_FILES['Image'];

        $image_name = $_FILES['Image']['name'];
        $image_type = $_FILES['Image']['type'];
        $image_size = $_FILES['Image']['size'];
        $file_tmpname = $_FILES['Image']['tmp_name'];
        $image_error = $_FILES['Image']['error'];

        $image_exten = explode('.',$image_name);
        $image_actual = strtolower(end($image_exten));

        $allowed = array('jpg','jpeg','png','gif');


        // echo "$FullName"."<br>";
        // echo "$Username"."<br>";
        // echo "$Email"."<br>";
        // echo "$Password"."<br>";
        // echo "$Access"."<br>";
        // echo "$Image"."<br>";

        // die();

        if (empty($FullName)||empty($Username)||empty($Email)||empty($Password)||empty($Access)) {
            header("Location: signup.php?signup=Empty");
            exit();
        }else {
            if (!preg_match("/[a-zA-Z]/", $FullName)||!preg_match("/[a-zA-Z]/", $Username)&&!preg_match("/[a-zA-Z]/", $Email)||!preg_match("/[a-zA-Z0-9]/", $Password)||!preg_match("/[a-zA-Z]/", $Access)) {
                header("Location: signup.php?signup=preg_match_error");
                exit();
            }else{

                // Check if the Email is a Valid Email
                if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
                    header("Location: signup.php?signup=invalidEmail");
                    exit();
                }else{

                    $sql="SELECT * FROM signup WHERE Username='$Username'";
                    $result = $con->_connection->query($sql);
                    $resultcheck= $result->num_rows;



                    if ($resultcheck > 0) {
                        header("Location: signup.php?signup=UsernameTaken");
                        exit();
                    }else {


                        if (in_array($image_actual,$allowed)){
                            if ($image_error === 0){
                                if ($image_size < 500000){
                                    $file_newname = uniqid('',true).".".$image_actual;
                                    $file_destination = 'assets/img/'.$file_newname;
                                    move_uploaded_file($file_tmpname,$file_destination);

                                    $password = password_hash($Password,PASSWORD_DEFAULT);

                                    $con->insert('signup', $FullName, $Username, $Email, $password, $file_newname , $Access);
                                    header("Location: Siimple/index.php");
                                    exit();

                                }else{
                                    die('Your Upload File is too large ');
                                }
                            }else{
                                die('Upload Error');
                            }
                        }else{
                            die('Upload Error ');
                        }

                    }
                }

            }
        }
	}else{
		header("Location: signup.php");
		exit();
	}
?>