<?php
include_once "include/validation.php";
include_once "include/Database.php";
?>
<?php
include_once('include/header.php');
include_once('include/nav.php');

$con = new Database();

$id =  $_SESSION['id'];


if(isset($_POST['submit'])) {
    $data['Password'] = password_hash($_POST['cpassword'], PASSWORD_DEFAULT);

    $updated = $con->update('signup', $data, 'id = ' ."$id");

}

?>
<div class="Container">
	<div class="Container-fluid">
		<form method="Post">
			<fieldset>
				<div class="col-md"><h1>Change Password</h1></div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">New Password</label>
			    <input type="password" class="form-control" name=cpassword" id="exampleInputEmail1" aria-describedby="emailHelp" value="">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputtext">Verify New Password:</label>
			    <input type="password" class="form-control" name="cpassword" id="exampleInputPassword1" value="">
			  </div>
	            <input type="submit" name="submit" class="btn-outline-info">
			</fieldset> 
		</form>
	</div>
</div>



<?php
include_once('include/footer.php');
?>