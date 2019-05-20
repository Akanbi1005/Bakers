<?php
include_once "include/validation.php";
include_once "include/Database.php";
?>
<?php
include_once('include/header.php');
include_once('include/nav.php');

$con = new Database();

$id =  $_SESSION['id'];
$_GLOBAL['id'] = $id;


if(isset($_POST['submit'])) {
    $data['FullName'] = $_POST['contact'];
    $data['Username'] = $_POST['contact1'];
    $data['Email'] = $_POST['add'];
    

    $updated = $con->update('signup', $data, 'id = ' ."$id");
}


?>
<?php
$info = $con->select_by_id('signup',"$id");
?>
<div class="col-md" >
	<form action="" method="post">
		<fieldset>
			<div class="col-md"><h1>Profile View</h1></div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Name:</label>
		    <input type="text" class="form-control" name="contact" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $info['FullName'] ?>">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputtext">User Name:</label>
		    <input type="text" class="form-control" name="contact1" id="exampleInputPassword1" value="<?php echo $info['Username'] ?>">
		  </div>
		   <div class="form-group">
		    <label for="exampleInputtext">Email Address:</label>
		    <input type="text" class="form-control" name="add" id="exampleInputPassword1" value="<?php echo $info['Email'] ?>">
		  </div>
            <input type="submit" name="submit" class="btn-outline-info">
		  <!--<button type="submit" class="btn btn-danger" >Delete</button>-->
		</fieldset> 
	</form>
</div>
<?php
include_once('include/footer.php');
?>