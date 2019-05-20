<?php
include_once "include/Database.php";
session_start();

$id = $_GET['id'];

?>


<?php
include_once('include/header.php');
include_once('include/nav.php');

$lov = new Database();


$test = $lov->select_by_id('about', "$id");


if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['Submit'])) {
$image = $_FILES['Image'];

$image_name = $_FILES['Image']['name'];
$image_type = $_FILES['Image']['type'];
$image_size = $_FILES['Image']['size'];
$file_tmpname = $_FILES['Image']['tmp_name'];
$image_error = $_FILES['Image']['error'];

$image_exten = explode('.',$image_name);
$image_actual = strtolower(end($image_exten));

$allowed = array('jpg','jpeg','png','gif');




if (in_array($image_actual,$allowed)){
    if ($image_error === 0){
        if ($image_size < 500000){
            $file_newname = uniqid('',true).".".$image_actual;
            $file_destination = '../img/'.$file_newname;
            move_uploaded_file($file_tmpname,$file_destination);

            
            $lov->update('about', '$file_tmpname', "$id");
            header("about.show.php");
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


?>
<div class="container">
	<div class="row">
		<div class="container-fluid">
			<form method="POST">
				<fieldset>
					<div class="col-md"><h1>About Page</h1></div>
				  <div class="col-md-lg">
			    	<label for="exampleInputEmail1">About Image:</label>
			    	<img src="../<?php echo $test['about_img']?>" class="img-rounded" alt="Cinque Terre">
			    	 <div class="">
                      <label class="Custom-Upload">
                        <input type="file" id="file" name="Image" class="form-control">
                      </label>
                    </div>
				  </div>
				  <div class="form-group">
				    <label for="exampleInputEmail1">About Header:</label>
				    <input type="text" class="form-control" id="exampleInputEmail1" name="1" aria-describedby="emailHelp" value="<?php echo $test['about_header'] ?>">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputtext">About Body:</label><br>
				    <textarea cols="100" rows="10"><?php echo $test['about_body'] ?></textarea>
				  </div>
	                <button type="submit" name="submit" class="btn-info">Submit</button>
				</fieldset> 
			</form>
		</div>
	</div>
</div>

<?php
include_once('include/footer.php');
?>