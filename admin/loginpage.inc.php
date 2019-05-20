
<?php
include_once "include/validation.php";
include_once "include/Database.php";
?>
<?php
include_once('include/header.php');
include_once('include/nav.php');

$con = new Database();


if(isset($_POST['submit'])) {
    $data['sign_title'] = $_POST['1'];
    $data['sign_title1'] = $_POST['2'];
    $data['sign_header'] = $_POST['3'];
    $data['sign_body'] = $_POST['4'];
    $data['sign_footer_link'] = $_POST['5'];
    $data['sign_footer_name'] = $_POST['6'];

    $updated = $con->update('login', $data, 'id = ' .'1');


}

    ?>

<div class="table-responsive">
	
		<?php
	    	$login_table = $con->select("login");
	    	foreach ($login_table as $login )
	    	 {
	    ?>

	     <div class="col-md" >
		<form action="" method="post">
			<fieldset>
				<div class="col-md"><h1>Login Page Setup</h1></div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Login Page Title 1:</label>
			    <input type="text" class="form-control" id="exampleInputEmail1" name="1" aria-describedby="emailHelp" value="<?php echo$login['sign_title'] ?>">
			    
			  </div>
			  <div class="form-group">
			    <label for="exampleInputtext">Login Page Title 2:</label>
			    <input type="text" class="form-control" id="exampleInputPassword1" name="2" value="<?php echo $login['sign_title1'] ?>">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputtext">Login Page Header:</label>
			    <input type="text" class="form-control" id="exampleInputPassword1" name="3" value="<?php echo $login['sign_header']; ?>">
			  </div>
			   <div class="form-group">
			    <label for="exampleInputtext">Login Page Body:</label>
			    <input type="text" class="form-control" id="exampleInputPassword1" name="4" value="<?php echo $login['sign_body'] ?>">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputtext">Login Footerlink:</label>
			    <input type="text" class="form-control" id="exampleInputPassword1" name="5" value="<?php echo $login['sign_footer_link']; ?>">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputtext">Login Footer Name:</label>
			    <input type="text" class="form-control" id="exampleInputPassword1" name="6" value="<?php echo $login['sign_footer_name']; ?>">
			  </div>

			  <input type="submit" name="submit" class="btn-outline-info">

			</fieldset> 
		</form>
	</div>




	    <?php
			}
	    ?>

	</table>
</div>
<?php
include_once('include/footer.php');
?>